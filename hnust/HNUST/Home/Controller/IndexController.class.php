<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    private $Steeringtpl='<li class="list-group-item"><a href="{{link}}" title="{{title}}">{{title}}</a><span class="timer pull-right">{{time}}</span></li>';
    private $tpl='<li class="list-group-item"><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span><a href="{{link}}">{{title}}</a><span class="timer pull-right">{{time}}</span></li>';
    private  $filetpl='<li class="list-group-item"><a href="{{link}}">{{title}}</a></li>';
    private  $ctrltpl='<a href="javascript:void(0)"><img src="{{imgurl}}"></a>';
    // 打开主页，从数据库读取最新内容
    public function index(){
    	$informodle='';
    	$qfile='';
    	$filedw='';
    	$evaluationmodle='';
    	$teacherWeek='';
        $Steering='';
        $pg='';
        $ctrl='';
        // 模型实例化
        $inform=M('supervisor');
        // 公告通知
        $where['type']='0';
        $data=$inform->limit(7)->order('time')->where($where)->select();
        foreach ($data as $key){
            $temp=$this->Steeringtpl;
            $temp=preg_replace('/{{link}}/',$key['link'],$temp);
            $temp=preg_replace('/{{title}}/',$key['title'],$temp);
            $temp=preg_replace('/{{time}}/',$key['time'],$temp);
            $informodle.=$temp;
        }
         // 政策文件
        $where['type']='1';
        $data=$inform->limit(7)->order('time')->where($where)->select();
        foreach ($data as $key){
            $temp=$this->Steeringtpl;
            $temp=preg_replace('/{{link}}/',$key['link'],$temp);
            $temp=preg_replace('/{{title}}/',$key['title'],$temp);
            $temp=preg_replace('/{{time}}/',$key['time'],$temp);
            $qfile.=$temp;
        }
        // 专项评估
        $where['type']='2';
        $data=$inform->limit(6)->order('time')->where($where)->select();
        foreach ($data as $key) {
            $temp=$this->Steeringtpl;
            $temp=preg_replace('/{{link}}/',$key['link'],$temp);
            $temp=preg_replace('/{{title}}/',$key['title'],$temp);
            $temp=preg_replace('/{{time}}/',$key['time'],$temp);
            $evaluationmodle.=$temp;
        }
        //教学礼拜
        $where['type']='3';
        $data=$inform->limit(6)->order('time')->where($where)->select();
        foreach ($data as $key) {
            $temp=$this->Steeringtpl;
            $temp=preg_replace('/{{link}}/',$key['link'],$temp);
            $temp=preg_replace('/{{title}}/',$key['title'],$temp);
            $temp=preg_replace('/{{time}}/',$key['time'],$temp);
            $teacherWeek.=$temp;
        }
        // 评估动态
        $where['type']='4';
        $data=$inform->limit(5)->order('time')->where($where)->select();
        $pltpl=$this->fetch('pgtpl');
        foreach ($data as $key) {
            $c=$this->ctrltpl;
            $temp=$pltpl;
            $temp=preg_replace('/{{link}}/',$key['link'],$temp);
            $temp=preg_replace('/{{title}}/',$key['title'],$temp);
            $temp=preg_replace('/{{time}}/',$key['time'],$temp);
            $temp=preg_replace('/{{content}}/',$key['simplecontent'],$temp);
            $temp=preg_replace('/{{imgurl}}/',$key['imgurl'],$temp);
            $c=preg_replace('/{{imgurl}}/',$key['imgurl'],$c);
            $pg.=$temp;
            $ctrl.=$c;
        }
        $where['type']='5';
        $data=$inform->limit(6)->order('time')->where($where)->select();
        foreach ($data as $key) {
            $temp=$this->Steeringtpl;
            $temp=preg_replace('/{{link}}/',$key['link'],$temp);
            $temp=preg_replace('/{{title}}/',$key['title'],$temp);
            $temp=preg_replace('/{{time}}/',$key['time'],$temp);
            $Steering.=$temp;
        }
       
        // 下载文件
        $where['type']='6';
        $data=$inform->limit(6)->order('time')->where($where)->select();
        foreach ($data as $key) {
            $temp=$this->Steeringtpl;
            $temp=preg_replace('/{{link}}/',$key['link'],$temp);
            $temp=preg_replace('/{{title}}/',$key['title'],$temp);
            $temp=preg_replace('/{{time}}/',$key['time'],$temp);
            $filedw.=$temp;
        }
        $this->assign('Steering',$Steering);
        $this->assign('informodle',$informodle);
        $this->assign('filedw',$filedw);
        $this->assign('qfile',$qfile);
        $this->assign('evaluationmodle',$evaluationmodle);
        $this->assign('teacherWeek',$teacherWeek);
        $this->assign('pg',$pg);
        $this->assign('ctrl',$ctrl);
        $this->display();
    }
}