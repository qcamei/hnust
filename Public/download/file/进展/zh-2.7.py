#-*- coding: UTF-8 -*-
import requests
import time
from bs4 import BeautifulSoup
import os
import json
import re
import random
from PIL import Image
from urllib import urlencode
from urllib import quote
import threading
import Queue
import sys
reload(sys)
sys.setdefaultencoding('utf-8')
s=requests.session()
userAgent=[
    'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/52.0.2743.116 Safari/537.36',
    'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-us) AppleWebKit/534.50 (KHTML, like Gecko) Version/5.1 Safari/534.50',
    'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:38.0) Gecko/20100101 Firefox/38.0',
    'Mozilla/5.0 (Windows NT 6.1; rv:2.0.1) Gecko/20100101 Firefox/4.0.1',
    'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; Trident/4.0; SE 2.X MetaSr 1.0; SE 2.X MetaSr 1.0; .NET CLR 2.0.50727; SE 2.X MetaSr 1.0)',
]
headers= {
            'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/52.0.2743.116 Safari/537.36'
        } #定义请求头
l=open("link.txt","wb+")#存放链接，这个没什么太多用，因为我获取到链接就直接跳转了
class myThread (threading.Thread):
    def __init__(self,ThreadID,name,brand,filename):
        threading.Thread.__init__(self)
        self.ThreadID=ThreadID
        self.name=name
        self.brand=brand
        self.filename=filename
    def run(self):
        print "线程"+self.name+"正在运行"
        infor = GetInfor(self.brand,self.filename)
class Login:
    def __init__(self,username,password,URL):
        self.username=username
        self.password=password
        self.URL=URL
    #  获取_xsrf,这个参数是动态变化的
    def getXsrf(self):
        result=requests.get(self.URL,headers=headers)
        content=result.content
        soup=BeautifulSoup(content)
        xsrf=soup.find("input",{"name":"_xsrf"})["value"]
        return xsrf
    #获取验证码，知乎的验证码是一个时间戳，是一个实时的时间，验证码有一个有效期，具体是多久没搞清。。
    def getV(self):
        t = str(int(time.time() * 1000))
        captcha_url = 'http://www.zhihu.com/captcha.gif?r=' + t + "&type=login"
        req=requests.get(captcha_url,headers=headers)
        with open('captcha.jpg', 'wb') as f:
            f.write(req.content)
            f.close()
        try:
            im = Image.open('captcha.jpg')
            im.show()
            im.close()
        except:
            print("error!\n")
        captcha =raw_input("please input the captcha\n>")
        return captcha
    #登录的方式有邮箱和手机登录两种，两种方式,post的url不一样，我这里用的是手机号码，邮箱登录稍微改改就好了。。
    def Login(self):
        _xsrf=self.getXsrf()
        V=self.getV()
        fp = open("test.txt", "wb+")
        print _xsrf,'\n'
        print V,"\n"
        data={
            "_xsrf":_xsrf,
            "password":self.password,
            "captcha":V,
            "phone_num":self.username
        }
        isLogin=s.post("https://www.zhihu.com/login/phone_num",data=data,headers=headers)
        # 登录成功则把cookic保存起来，否则重新登录
        print isLogin.content,'\n'
        try:
            if(isLogin.json()["r"]==0):
                f=open("cookie.txt","wb+")
                res = s.get("http://www.zhihu.com/", headers=headers)
                cookic=requests.utils.dict_from_cookiejar(s.cookies)
                print s.cookies,"\n"
                json.dump(cookic,f)
                print "登录成功\n"
                f.close()
                return True
            else:
                print isLogin.json()["msg"],'\n'
                print "登录失败，请重新登录\n"
                return False
        except:
            print "发生错误\n"
            return False

      #加载本地的cookie
class LoadCookie:
     def getCookie(self):
        with open("cookie.txt","r+") as fp:
             scookie=fp.read()
        return scookie
     def Login(self):
             # fp = open("test.txt", "wb+")
             try:
                 scookie=self.getCookie()
                 cookie=json.loads(scookie)
                 # requests.utils.add_dict_to_cookiejar(s.cookies,cookie)
                 cookie=requests.utils.cookiejar_from_dict(cookie,cookiejar=None, overwrite=True)
                 s.cookies = cookie
                 isLogin = s.get("http://www.zhihu.com/", headers=headers)
                 # 查看cookic是否过期
                 if(self.isLogin()==False):
                     return False
                 else:
                    # fp.write(isLogin.content)
                    return  True
             except:
                 return False

     def isLogin(self):
         # 通过查看用户个人信息来判断是否已经登录
         url = "http://www.zhihu.com/settings/profile"
         login_code = s.get(url,headers=headers).status_code
         if int(x=login_code) == 200:
             return True
         else:
             return False
class GetInfor:
    def __init__(self,brand,filename):
        self.fp=open(filename+".txt","wb+")#存放信息
        self.url="https://www.zhihu.com/"
        n=random.randint(0,len(userAgent)-1)
        print
        useragent=userAgent[n]
        self.headers={
                    'User-Agent': useragent,
                    'Host': 'www.zhihu.com',
                    'Origin': 'https://www.zhihu.com',
                    'Referer': 'https://www.zhihu.com/question/27067355',
                    'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8',
                    'X-Requested-With': 'XMLHttpRequest'
                }  # 构造请求头
        self.soup=None
        self.brand=brand
        brand=quote(brand)
        self.getCurrentPage(self.url+"r/search?q="+brand+"&type=content")
        questionURL = self.url + "r/search?q="+brand+"&type=content&offset=10"#获取每一项的内容，如标题，链接
        res=s.get(questionURL,headers=headers)
        html="".join(res.json()["htmls"])#获取html代码
        paging=res.json()["paging"]#
        Next=paging['next']
        while Next!="":
            self.soup=BeautifulSoup(html)
            self.getOhterPage()
            res = s.get(self.url+Next[1:], headers=headers)
            html = "".join(res.json()["htmls"])
            paging = res.json()["paging"]
            Next = paging['next']#获取下一个链接
            time.sleep(2)#加2s休眠
        self.fp.close()
        #获取当前页面
    def getCurrentPage(self,url):
        res=s.get(url,headers=headers)
        soup=BeautifulSoup(res.content)
        links=soup.find_all("a",attrs={"class":"js-title-link"})
        self.getTile(links)
    def getOhterPage(self):
        lists = self.soup.find_all("li", attrs={"class": "item"})
        self.getTile(lists)
    #获取标题+链接并跳转
    def getTile(self,lists):
        #获取每个item的标题
        for list in lists:
            list=str(list)
            plink=re.compile('<a class="js-title-link" href="(.*?)" target="_blank">(.*?)</a>',re.S)
            #<a class="js-title-link" href="/question/23288694" target="_blank">
            lt=plink.search(list)
            # try:
            id=lt.group(1)
            #向link.txt写入请求的链接，同步
            threadLock.acquire()
            l.write(self.url+id[1:]+"\n")
            threadLock.release()
            #如果链接为知乎专栏的链接，则选择不访问该链接
            isJump=re.search("zhuanlan",id,re.S)
            if(isJump==None):
                pass
            else:
                print '链接为知乎专栏\n'
                break
            # except:
            #     print '出现错误\n'
            try:
                title =re.sub('<.*?>','',lt.group(2))
                self.fp.write("标题:" + title + "\n")
            except:
                self.fp.write("标题:无标题\n")
                print 'have no title\n'
                # 跳转到某个具体问题的链接
            self.getComment(id[1:])
    #获取对此问题的评论或回答的总数
    def getAnswerNum(self,soup):
        # 只有一个或者没有人评论或回答的时候，这个地方会出错
        try:
            h3=str(soup.find(id='zh-question-answer-num').string)
            # 通过正则匹配出其中的数字
            match=re.search('\d+',h3)
            print match.group(),'\n'
            return int(match.group())
        except:
            return 1
        #获取某个项的具体内容
        #获取内容
        #获取评论
    def getComment(self,link):
        print link,'\n'
        # 某个具体问题的链接
        count=0
        URL = self.url + link  # self.url+问题的ID字符串
        while count<3:
            try:
                res = s.get(URL, headers=headers)
                break
            except:
                count+=1
        if(count==3):
            print "服务器拒绝请求\n"
            return
        soup = BeautifulSoup(res.content)
        problemID = re.search("\d+",link)  # 匹配出link中的问题ID
        try:
            ID = problemID.group()
            a = soup.find("a", attrs={"href": "/question/" + ID + "/followers"})
            a = str(a)
            concern = re.search("<strong>(.*?)</strong>",a,re.S)
            try:
                self.fp.write("\t\t\t关注的人数:" + concern.group(1) + "\n")
            except:
                self.fp.write("\t\t\t关注的人数:0\n")
                print "无关注者\n"
        except:
            print "Error!\n"
        content = soup.find(id="zh-question-detail")  # 获取问题的具体内容
        content = str(content)
        # self.f.write(content + "\n")
        pcontent = re.compile('<div class="zm-editable-content">(.*?)</div>', re.S)
        tcontent = pcontent.search(content)  # 从content中匹配出问题的具体内容
        # 当问题的内容描述过多的时候，tcontent为None,需要从textarea中获取全部内容
        try:
            tcontentText = re.sub('<.*?>', '', tcontent.group(1))  # 去掉内容中的html标签
            self.fp.write("\t内容:" + tcontentText + "\n")
        except:
            # 出现异常则从textarea中获取内容
            try:
                detail = re.search('<textarea.*?>(.*?)</textarea>', content, re.S)
                detailText = re.sub('<.*?>', '', detail.group(1))
                self.fp.write("\t内容:" + detailText + "\n")
            except:
                self.fp.write("\t内容:None\n")
                print '无内容\n'

        self.fp.write("回复:\n")
        aswerNum = self.getAnswerNum(soup)
        try:
            dataList = soup.find_all("div", attrs={"class": "zm-item-answer"})
            print dataList, '\n'
            self.writeComment(dataList)
        except:
            self.fp.write("\t无回复\n")
            print '无回复\n'
            #当评论数大于10的时候,可以直接向URL='https://www.zhihu.com/node/QuestionAnswerListV2'请求所需要的数据,相反,它没有数据返回,要从源码中获取
        if (aswerNum > 10):
            # 获取每个问题的评论或答案,返回的数据是个list
            URL = 'https://www.zhihu.com/node/QuestionAnswerListV2'
            num = aswerNum / 10
            with open("cookie.txt") as fp:
                cookie = json.loads(fp.read())
                _xsrf = cookie['_xsrf']
            for i in range(1, num + 1):
                # 构造post的数据
                match = re.search('\d+', link)
                params = '{"url_token":' + match.group() + ',"pagesize":10,"offset":' + str(i * 10) + '}'
                data = {
                    "method": "next",
                    "params": params,
                    "_xsrf": _xsrf
                }
                res = s.post('https://www.zhihu.com/node/QuestionAnswerListV2', data=data, headers=self.headers)
                # 提取信息
                dataList = res.json()['msg']
                self.writeComment(dataList)
                print dataList, '\n'
         #写入内容
         #写入评论
    def writeComment(self,dataList):
        for list in dataList:
            list=str(list)
            soup = BeautifulSoup(list)
            # 获取赞这个评论或者答案的总数
            pzanCount = str(soup.find('span', class_='count'))
            # 获取某个评论或答案的内容
            pcontent = str(soup.find('div', class_='zm-editable-content'))
            # 获取发表评论或者答案的时间
            ptime = str(soup.find('a', class_='answer-date-link'))
            zanCount = re.search('<span.*?>(.*?)</span>', pzanCount, re.S)
            content = re.search('<div.*?>(.*?)</div>', pcontent, re.S)
            time = re.search('<a.*?>(.*?)</a>', ptime, re.S)

            self.fp.write("赞同的人数:" + zanCount.group(1) + "\n")
            contentText = re.sub('<.*?>', '', content.group(1))
            self.fp.write("评论的内容:\t" + contentText + "\n")

            self.fp.write("\t\t" + time.group(1) + "\n\n")

            replayID = re.search('<div.*?class="zm-item-answer.*?zm-item-expanded".*?data-aid="(.*?)".*?>',list, re.S)
            self.getSubComment(replayID.group(1))
         #获取子评论
         #获取子评论
    def getSubComment(self,replayID):
        count=0
        URL='https://www.zhihu.com/r/answers/'+replayID+"/comments"
        # print URL,'\n'
        while count<3:
            try:
                res=s.get(URL,headers=self.headers)
                comments=res.json()['data']#是一个字典的集合
                for comment in comments:
                    self.fp.write("\t\t\t------>")
                    self.fp.write(comment['content']+'\t\t'+comment['createdTime']+'\n')
                    self.fp.write("\t\t\t\t")
                    self.fp.write('赞('+str(comment['likesCount'])+')\t'+'踩('+str(comment['dislikesCount'])+')\n')
                print  'Request success!\n'
                break
            except:
                #请求失败了休眠两秒再次发起请求
                time.sleep(2)
                count+=1
                print 'Request faile!\n'
         #请求超过三次失败表示服务器已经拒绝请求
        if(count==3):
            print "Severs dine!\n"

cookicLoad=LoadCookie()
cookicLoad.getCookie()
isLogin=cookicLoad.Login()
if(isLogin==False):
    link = Login("13973214769", "asd96310zxc", "http://www.zhihu.com/")
    flag=link.Login()
    while(flag==False):
        flag=link.Login()
threadLock=threading.Lock()
sqe=0
while True:
    try:
        brand=raw_input("请输入品牌:>")
        filename=raw_input("请输入保存的文件名:>")
        thread = myThread(sqe, "Thread-" + str(sqe), brand, filename)
        thread.start()
        sqe+=1
    except:
        print '输入结束'
        break
l.close()


