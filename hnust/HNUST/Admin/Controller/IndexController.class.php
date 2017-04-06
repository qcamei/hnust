<?php
namespace Admin\Controller;
use Think\Controller;

class IndexController extends Controller{
	private $tpl='<li class="list-group-item"><span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span><a href="{{link}}">{{content}}</a><span class="timer pull-right">{{time}}</span></li>';
    public function index(){
      if($this->isLogin()){
            $tar=I('target','index');
            if($tar=='index'){
                $user=M('admin');
                // echo session('id');
                $nickname=$user->field('authority,nickname')->where(array('userid'=>session('id')))->select();
                // dump($nickname);
                $this->assign('nickname',$nickname[0]);
            }
            $this->display($tar);
        }
    }
 public function upload(){
   $this->isLogin();
 	 $fp=M('document');
 	 $data=array();
 	 $upfileconfig=array(
 	 	'maxSize'=>3145728,
 	 	'rootPath'=>'./',
 	 	'savePath'=>'/file/',
 	 	'saveName'=>array('uniqid','md5'),
 	 	'exts'=>'',
 	 	'autoSub'=>true,
 	 	// 'subName'=>array('date','Y-m-d')
 	 	);
 	 if(!file_exists($upfileconfig['rootPath'])){
 	 	$filemk=mkdir($upfileconfig['rootPath']);
 	 	if(!$filemk){
 	 		echo 'faile';
 	 		return;
 	 	}
 	 	else echo 'success';
     }
     $upload=new \Think\Upload($upfileconfig);
     $fileinfor=$upload->upload();
     if(!$fileinfor){
     	$this->error($upload->getError());
     }
     else {
     	foreach ($fileinfor as $info) {
     		 $data['id']=$info['savename'];
     		 $data['filename']=$info['name'];
     		 $data['link']=__APP__.'/download?fileid='.$info['savename'].'.'.$info['ext'].'&filename='.$info['name']; 
             if(!$fp->add($data)){
                 $this->success('数据插入失败');
             }
     	}
     	$this->success('文件上传成功');
     }
 }
 // 上传通知
 public function uploadinfor(){
  $this->isLogin();
    // 将每个通知写一个唯一id当作主键
 	$id=md5(uniqid());
 	$author=I('author','');
 	$headline=I('title','');
 	$source=I('source','');
 	$time=I('time','');
 	$content=I('mainbody','');
    $simpleContent=strip_tags(htmlspecialchars_decode($content));
    $simpleContent=preg_replace('/\s*/','',$simpleContent);
 	$type=I('type','');
    // 获取新闻展示模板，并替换里面的内容
 	$newstpl=$this->fetch('Index:newstpl');
 	$newstpl=preg_replace('/{{title}}/',$headline,$newstpl);
 	$newstpl=preg_replace('/{{author}}/',$author,$newstpl);
 	$newstpl=preg_replace('/{{source}}/',$source,$newstpl);
 	$newstpl=preg_replace('/{{time}}/',$time,$newstpl);
 	$newstpl=preg_replace('/{{content}}/',$content,$newstpl);
 	$data=array();
 	$work=M('supervisor');
 	$data['id']=$id;
 	$data['title']=$headline;
 	$data['content']=$newstpl;
    $data['simplecontent']=$simpleContent;
    // type表示某个模块的文件，以便展示的时候分模块展示，id为某条通知的id
 	$data['link']=__APP__.'/home/file/getfile?type='.$type.'&id='.$id;
 	$data['author']=$author;
 	$data['source']=$source;
 	$data['time']=$time;
 	$data['type']=$type;
    // 当是评估动态模块的时候，带有一张图片
    if(is_array($_FILES)){
        $imgid=md5(time());
        $upfileconfig=array(
            'maxSize'=>3145728,
            'rootPath'=>'./Public',
            'savePath'=>'/img/',
            'saveName'=>$imgid,
            'exts'=>'',
            'autoSub'=>false,
            );
        $upfile =new \Think\Upload($upfileconfig); 
        $fileinfo=$upfile->uploadOne($_FILES['file']);
        if($fileinfo){
        // 保存图片的路径，如果没有轮播的图片的话，该项为空
        $data['imgurl']=__ROOT__.'/Public/img/'.$imgid.'.'.$fileinfo['ext'];
    }
  }
 	$result=$work->add($data);
 	if($result){
 		// $this->success('数据插入成功');
 		$res['state']='success';
 	}
 	else{
 		$res['state']='faile';
 	}
 	$this->ajaxReturn($res);
 }
 // 获取文件的列表
 public function getfileList(){
  $this->isLogin();
 	$file=M('document');
 	$filelist=$file->select();
    // echo $file->getLastSql();
 	$this->ajaxReturn($filelist);
 }
 // 删除文件，根据文件的ID来删除
 public function updateFile(){
    $this->isLogin();
    $fileid=I('id','');
    $file=M('document');
    $infor=M('supervisor');
    if($file!=''){
       if(is_array($fileid)){
         foreach ($fileid as $id) {
              $file->delete($id);
              if(!unlink(I('SERVER.DOCUMENT_ROOT').$id)){
                   $this->success('文件删除成功');
              }
              else{
                 $this->error('文件删除成功');
              }
         }
       }
       else {
          $file->delete($fileid);
           if(!unlink(I('SERVER.DOCUMENT_ROOT').$fileid)){
                   $this->success('文件删除成功');
              }
              else{
                 $this->error('文件删除成功');
              }
       }
    }
    
 }
 // 获取通知列表
 public function getinformList(){
    // $this->isLogin();
    $file=M('supervisor');
    $where['type']=I('type');
    $filelist=$file->field('id,title,author,time,source,type')->where($where)->order('time')->select();
    // echo $file->getLastSql();
    $this->ajaxReturn($filelist);
 }
 // 删除通知
 public function updateInfor(){
    $this->isLogin();
    $fileid=I('id','');
    $file=M('supervisor');
    if($file!=''){
       if(is_array($fileid)){
         foreach ($fileid as $id) {
              $file->delete($id);
         }
       }
       else {
          $file->delete($fileid);
       }
    }
     $this->success('删除成功');
 }
 function isLogin(){
   if($_SESSION['id']==null){
     exit('<script>top.location.href="'.__APP__.'/login"</script>');
   }
   return true;
 }
}
?>