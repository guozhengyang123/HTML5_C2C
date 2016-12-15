<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$goods=M('details');
    	$data=$goods->where("pid=1")->limit('4')->select();
    	$this->assign('ess',$data);

    	$goods=M('details');
    	$data=$goods->where("pid=7")->limit('4')->select();
    	$this->assign('iss',$data);
    	$goods=M('details');

    	$data=$goods->where("pid=12")->limit('4')->select();
    	$this->assign('dss',$data);
    	$goods=M('details');

    	$data=$goods->where("pid=20")->limit('4')->select();
    	$this->assign('fss',$data);
    	$goods=M('details');

    	$data=$goods->where("pid=26")->limit('4')->select();
    	$this->assign('pss',$data);

        $char=M('adv');
        $data=$char->select();
        $this->assign('adv',$data);
    	$goods=M('details');
    	//获取酒店分类信息
        $good=M('category');
        $that=$good->where("tag=1")->select();
        $this->assign('sds',$that);

        $that=$good->where("pid=1")->select();
        $this->assign('ses',$that);

        // $tha=$good->where("id=12")->select();
        // $this->assign('sfs',$tha);

        // $tha=$good->where("id=20")->select();
        // $this->assign('sgs',$tha);

        // $tha=$good->where("id=26")->select();
        // $this->assign('shs',$tha);

        // $tha=$good->where("id=34")->select();
        // $this->assign('sls',$tha);

        // $tha=$good->where("id=45")->select();
        // $this->assign('sms',$tha);

        // $list=$good->where("pid=1")->select();
        // $this->assign('eoe',$list);

        // $that=$good->where("pid=7")->select();
        // $this->assign('sos',$that);

        // $that=$good->where("pid=12")->select();
        // $this->assign('ees',$that);

        // $tha=$good->where("pid=20")->select();
        // $this->assign('efs',$tha);

        // $tha=$good->where("pid=26")->select();
        // $this->assign('egs',$tha);

        // $tha=$good->where("pid=34")->select();
        // $this->assign('ehs',$tha);

        // $tha=$good->where("pid=45")->select();
        // $this->assign('els',$tha);

        $this->display();
    	
    	//获取酒店简介
    }
   

   
}