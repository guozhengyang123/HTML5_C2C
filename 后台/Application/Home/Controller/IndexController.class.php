<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$goods=M("goods");
    	$data=$goods->where("pid=1")->limit('4')->select();
    	$this->assign('ess',$data);
    	$data=$goods->where("pid=7")->limit('4')->select();
    	$this->assign('iss',$data);
    	$data=$goods->where("pid=12")->limit('4')->select();
    	$this->assign('dss',$data);
    	$data=$goods->where("pid=20")->limit('4')->select();
    	$this->assign('fss',$data);
    	$data=$goods->where("pid=26")->limit('4')->select();
    	$this->assign('pss',$data);
        $char=M('adv');
        $data=$char->select();
        $this->assign('adv',$data);
        $class=M("category");
        $data=$class->select();
        $list=array();
        foreach($data as $arr){
            $list[$arr['pid']][]=$arr;
        }
        $this->assign("list",$list);
        $this->display();
    }
   

   
}