<?php
namespace Home\Controller;
use Think\Controller;

class FileController extends Controller
{
	// 文件模板
	private  $filetpl = '<li class="list-group-item"><a href="{{link}}" title="{{title}}">{{title}}</a></li>';
	private $tpl = '<li class="list-group-item"><span class="glyphicon glyphicon-hand-right" aria-hidden="true" style="color:"></span><a href="{{link}}" title="{{title}}">{{title}}</a><span class="timer pull-right">{{time}}</span></li>';
	 // 展示新闻具体内容
    public function getfile()
    {
    	$newlist = '';
    	// 根据新闻ID来获取新闻
    	$id = I('id');
    	$type = I('type');
    	$m = M('supervisor');
    	$content = $m->find($id);
        $m->where(array('id' => $id))->setInc('clicknum', 1);
    	$this->assign('content', $content);
    	if ($type == '0') {
     	    $this->display('Index:informtpl');
        } else {
    	    $data = $m->limit(6)->order('time desc')->select();
    	 	foreach ($data as $key) {
    	 		$temp = $this->tpl;
    	 		$temp = preg_replace('/{{link}}/', __APP__ . '/' . $key['link'], $temp);
        	    $temp = preg_replace('/{{title}}/', $key['title'], $temp);
        	    $temp = preg_replace('/{{time}}/', $key['time'], $temp);
        	    $newlist .= $temp;
    	 	}
    	 	$this->assign('list', $newlist);
    	 	$this->display('Index:new_show');
        }
    }
     // 点击更多的时候，获取列表
    public function more()
    {
        $this->display('Index:assess_dyn');
    }
    public function loadContent()
    {
    	$res = array();
    	$content = '';
        $type = I('type', '');
        $page = intval(I('page', '1'));
        $d = I('d', '');
        $fp=M('supervisor');
        if ($type != '4') {
            $contion['type'] = $type;
            $data=$fp->limit(10)->page($page)->order('time desc')->where($contion)->select();
            if($d == 'file'){
                $listmore = $this->fetch('Index:listmore');
                foreach ($data as $key){
                    $temp = $this->filetpl;
                    $temp = preg_replace('/{{link}}/', __APP__ . '/' . $key['link'], $temp);
                    $temp = preg_replace('/{{title}}/', $key['title'], $temp);
                    $content.=$temp;
                }
                $content=preg_replace('/{{content}}/', $content,$listmore);
            } else {
                $listmore = $this->fetch('Index:listmore');
                foreach ($data as $key) {
                    $temp = $this->tpl;
                    $temp = preg_replace('/{{link}}/', __APP__ . '/' . $key['link'], $temp);
                    $temp = preg_replace('/{{title}}/', $key['title'], $temp);
                    $temp = preg_replace('/{{time}}/', $key['time'], $temp);
                    $content .= $temp;
                }
                $content = preg_replace('/{{content}}/', $content, $listmore);
            }
            // 判断是否还有数据
            $datanum = $fp->field("count(*)")->where($contion)->select();
            if($datanum[0]['count(*)'] <= $page*10){
                $res['next'] = '';
            }
            else{
            	$res['next'] = $page+1;
            }
        } else {
            $contion['type'] = $type;
            $data = $fp->limit(8)->page($page)->order('time desc')->where($contion)->select();
               // 点击评估动态更多
            $pgmore = $this->fetch('Index:pgmore');
            foreach ($data as $key) {
            	$temp=$pgmore;
            	$temp=preg_replace('/{{link}}/', __APP__ . '/' . $key['link'], $temp);
                $temp=preg_replace('/{{title}}/', $key['title'], $temp);
                $temp=preg_replace('/{{time}}/', $key['time'], $temp);
                $temp=preg_replace('/{{content}}/', preg_replace('/[\s]/', '', strip_tags(htmlspecialchars_decode($key['content']))), $temp);
                if (is_null($key['imgurl'])) {
                    $temp = preg_replace('/{{imgurl}}/', 'Public/img/nopic.png', $temp);
                } else {
                    $temp = preg_replace('/{{imgurl}}/',$key['imgurl'],$temp);
                }
                $content .= $temp;
            }
            $datanum = $fp->field("count(*)")->order('time')->where($contion)->select();
            if ($datanum[0]['count(*)'] <= $page*8) {
                $res['next'] = '';
            } else {
            	$res['next'] = $page + 1;
            }
        }
       $res['data'] = $content;
       return $res;
    }
    public function nextPage(){
        $res = $this->loadContent();
        $this->ajaxReturn($res);
    }
   // 下载文件
    public function download()
    {
    	if (isset($_GET['fileid'])) {
    	    $filepath = $_GET['fileid'];
        }
        else exit;
        $path = I('server.DOCUMENT_ROOT') . $filepath;
        $path = iconv('UTF-8','GBK',$path);
        if (file_exists($path)) {
            $fp = fopen($path,'r');
            if (!$fp) {
            	$this->error('该文件已经被删除');
            	exit;
            }
            // header("Content-type:application/octet-stream");
            header("Accept-Ranges:bytes");
            header("Accept-Length: " .filesize($path));
            header("Content-Disposition:   attachment;  filename=".I('filename'));
            header("Content-Type: */*; charset=utf-8");
            ob_clean();
            flush();
            $content = fread($fp, filesize($path));
            echo $content;
        } else {
            $this->error('该文件不存在');
        }
    }
}
?>