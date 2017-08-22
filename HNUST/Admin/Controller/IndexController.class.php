<?php

namespace Admin\Controller;
use Think\Controller;

class IndexController extends Controller
{
	private $tpl = '<li class="list-group-item"><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span><a href="{{link}}">{{content}}</a><span class="timer pull-right">{{time}}</span></li>';
    private $map = [
        "0" => '公告通知',
        "1" => '政策文件',
        "2" => '专项评估',
        "3" => '教学礼拜',
        "4" => '评估动态',
        "5" => '教学督导',
        "6" => '下载专区',
    ];
    private $index = 0;
    /**
     * [index description]
     * @return [type] [description]
     */
    public function index()
    {
      if ($this->isLogin()) {
            $tar = I('target','index');
            if ($tar == 'index') {
                $user = M('user');
                $nickname = $user->field('authority,nickname')
                                 ->where(array('username'=>session('id')))
                                 ->select();
                $this->assign('nickname', $nickname[0]);
            }
            $this->display($tar);
        }
    }
    /**
     * [upload description]
     * @return [type] [description]
     */
    public function upload()
    {
        $this->isLogin();
        $fp = M('document');
        $data = array();
        $upfileconfig = array(
        	'maxSize' => 31457280,
        	'rootPath' => './',
        	'savePath' => '/file/',
        	'saveName' => array('uniqid'),
        	'exts' => '',
        	'autoSub' => true,
        	'subName' => array('date','Y-m-d')
        );
 	    if (!file_exists($upfileconfig['rootPath'])) {
     	 	$filemk=mkdir($upfileconfig['rootPath']);
     	 	if(!$filemk){
     	 		echo 'faile';
     	 		return;
    	 	}
     	 	else echo 'success';
        }
        $upload = new \Think\Upload($upfileconfig);
        $fileinfor=$upload->upload();
        if (!$fileinfor) {
        	$this->error($upload->getError());
        }
        else {
        	foreach ($fileinfor as $info) {
        		$data['id'] = $info['savename'];
        		$data['filename'] = $info['name'];
        		$data['link'] = __APP__ . '/download?fileid=' . $info['savename'] . '.' . $info['ext'] . '&filename=' . $info['name'];
                if(!$fp->add($data)){
                    $this->success('数据插入失败');
                }
        	}
        	$this->success('文件上传成功');
        }
    }
    /**
     * [uploadinform description]
     * @return [type] [description]
     */
    public function uploadinform()
    {
        $this->isLogin();
        // 将每个通知写一个唯一id当作主键
        $id = md5(uniqid());
        $author = I('author','');
        $headline = I('title','');
        $source = I('source','');
        $time = I('time','');
        $content = I('mainbody','');
        $type = I('type','');
        $clickNum = I('click_num/d', 0);
        // 获取新闻展示模板，并替换里面的内容
        $data = array();
        $work = M('supervisor');
        $data['id'] = $id;
        $data['title'] = $headline;
        $data['content'] = $content;
        // type表示某个模块的文件，以便展示的时候分模块展示，id为某条通知的id
        $data['link'] = 'home/file/getfile?type=' . $type . '&id=' . $id;
        $data['author'] = $author;
        $data['source'] = $source;
        $data['time'] = $time;
        $data['type'] = $type;
        $data['clicknum'] = $clickNum;
        // 当是评估动态模块的时候，带有一张图片
        if (!empty($_FILES)) {
        // 上传图片的配置
            $upfileconfig=array(
                'maxSize'   =>  31457280,
                'rootPath'  =>  './Public',
                'savePath'  =>  '/img/',
                'saveName'  =>   array('uniqid'),
                'exts'      =>   '',
                'autoSub'   =>   true,
                'subName'   =>   array('date','Y-m-d'),
            );
            // 实例化文件对象
            $upfile =new \Think\Upload($upfileconfig);
            // 单图不为空
            if(array_key_exists('showImg', $_FILES))
            {
                // 上传单图
                $fileinfo = $upfile->uploadOne($_FILES['showImg']);
                if ($fileinfo) {
                    // 保存图片的路径，如果没有轮播的图片的话，该项为空
                    $data['imgurl'] = 'Public' . $fileinfo['savepath'] . $fileinfo['savename'];
                }
            }
            // 新闻多图不为空
            if(array_key_exists('img', $_FILES))
            {
                $res['msg'] = $_FILES['img'];
                // 上传多图
                $imgsinfo = $upfile->upload(array($_FILES['img']));
                // 判断是否上传成功
                if ($imgsinfo) {
                    // 保存每个上传文件的信息
                    $imgurls = array();
                    foreach ($imgsinfo as $info) {
                        $imgurls[] = 'Public' . $info['savepath'] . $info['savename'];
                    }
                    $data['newsimgs'] = implode(',',$imgurls);
                }
                else {
                    $res['msg'] = $upfile->getError();
                }
            }
        }
        $result = $work->add($data);
        if($result !== false){
        	$res['state'] = '0';
        }
        else{
        	$res['state'] = '-1';
        }
        $this->ajaxReturn($res);
    }

    public function getinformList()
    {
        $this->isLogin();
        $index = 1;
        $file = M('supervisor');
        $where['type'] = I('type', '0');
        $page = I('page');
        $totle = $file->field('id,title,author,time,source,type')
                      ->where($where)
                      ->count();
        $filelist = $file->field('id,title,author,time,source,type')
                         ->where($where)
                         ->order('time desc')
                         ->limit(10)
                         ->page($page)
                         ->select();
        $filelist = array_map(function($file){
            $file['index'] = $this->index++;
            $file['type'] = $this->map[$file['type']];
            return $file;
        }, $filelist);
        $this->ajaxReturn([
            'currpage' => $page,
            'datalist' =>$filelist,
            'total' => intval($totle/10)+1,
            'totalCount'=>$totle
        ]);
    }
    // 删除通知
    public function deleteInform()
    {
        $this->isLogin();
        $informid = I('id','');
        $condtion['informid'] = $informid;
        $inform = M('supervisor');
        if ($inform != '') {
            if (is_array($informid)) {
                foreach ($informid as $id) {
                    $inform->delete($id);
                }
            }
            else {
                $inform->delete($informid);
            }
        }
        $this->success('删除成功');
    }
    function isLogin()
    {
        if ($_SESSION['id'] == null) {
            header("location:" . __APP__ . '/login');
        }
        return true;
    }
    function editNews()
    {
        $id = I('id','');
        $news = M('supervisor')->where(array('id' => $id))
                               ->select();
        $this->assign('news', $news[0]);
        $this->display('updateNews');
    }
    function updateInform()
    {
        $this->isLogin();
        $work = M('supervisor');
        $id = I('id','');
        $author = I('author','');
        $headline = I('title','');
        $source = I('source','');
        $time = I('time','');
        $content = I('mainbody','');
        $type = I('type','');
        $clickNum = I('click_num');
        $data = array();
        $data['title'] = $headline;
        $data['content'] = $content;
        // type表示某个模块的文件，以便展示的时候分模块展示，id为某条通知的id
        $data['link'] = 'home/file/getfile?type=' . $type . '&id=' . $id;
        $data['author'] = $author;
        $data['source'] = $source;
        $data['time'] = $time;
        $data['type'] = $type;
        $data['clicknum'] = $clickNum;
        if ($work->data($data)->where(array('id' => $id))->save()) {
                $this->ajaxReturn(array('r' => '0', 'msg' => '更新成功'));
        } else {
            $this->ajaxReturn(array('r' => '-1', 'msg' => '更新失败'));
        }
    }
    // 获取用户信息列表
    function getusersList()
    {
        $this->isLogin();
        $file = M('user');
        $filelist = $file->limit(30)->select();
        $this->ajaxReturn($filelist);
    }
     // 删除某用户
    function deleteUser()
    {
       $this->isLogin();
       $id = I('id','');
       M('user')->delete($id);
    }
    function updatePSW()
    {
        $this->isLogin();
        $id = I('session.id');
        $old = I('old','');
        $new = I('new','');
        $comfirm = I('confirm','');
        if($new != '' && $new == $comfirm){
            $user = M('user');
            $where['username'] = $id;
            $psw = $user->field('password')->where($where)->select();
            if(password_verify($old, $psw[0]['password'])){
                if($user->data(array('password' => password_hash($new, PASSWORD_DEFAULT)))->where($where)->save()){
                    $this->ajaxReturn(array("r" => 0, "msg" => "密码更新成功,请重新登录"));
                }
                else{
                    $this->ajaxReturn(array("r" => -1,"msg" => "密码更新失败"));
                }
            }
            else{
                $this->ajaxReturn(array("r" => -1,"msg" => "密码不正确"));
            }
        }
        else{
            $this->ajaxReturn(array("r" => -2, "msg" => "密码不一致"));
        }
    }

}
?>