<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller
{
    // 打开主页，从数据库读取最新内容
    public function index()
    {
    	$informodle = '';
    	$qfile = '';
    	$filedw = '';
    	$evaluationmodle = '';
    	$teacherWeek = '';
        $Steering = '';
        $pg = '';
        $ctrl = '';
        // 模型实例化
        $inform = M('supervisor');
        // 公告通知
        $where['type'] = '0';
        $informodle = $inform->limit(12)->order('time desc')->where($where)->select();
         // 政策文件
        $where['type'] = '1';
        $qfile = $inform->limit(3)->order('time desc')->where($where)->select();
        // 专项评估
        $where['type'] = '2';
        $Steering = $inform->limit(3)->order('time desc')->where($where)->select();

        //教学礼拜
        $where['type'] = '3';

        $teacherWeek = $inform->limit(9)->order('time desc')->where($where)->select();
        // 评估动态
        $wherep['type'] = '4';
        $wherep['imgurl'] = array('exp','is not null');
        $pg = $inform->limit(5)->order('time desc')->where($wherep)->select();
        $where['type'] = '5';
        $evaluationmodle = $inform->limit(9)->order('time desc')->where($where)->select();
        $this->assign('Steering',$Steering);
        $this->assign('informodle',$informodle);
        $this->assign('qfile',$qfile);
        $this->assign('evaluationmodle',$evaluationmodle);
        $this->assign('teacherWeek',$teacherWeek);
        $this->assign('pg',$pg);
        $this->display();
    }
}