<?php
namespace Home\Controller;
use Think\Controller;
class CategoryController extends Controller {
    public function category(){
        //获取酒店分类信息
        $bh=intval($_REQUEST["id"]);
        $goods=M('category');
        $data=$goods->where("id=$bh")->select();
        $this->assign("ess",$data);
        $poss=$goods->where("pid=$bh")->select();
        $this->assign("poss",$poss);

        $poss=$goods->where("pid=$bh")->limit('1')->select();
        $this->assign("pos",$poss);

        $goods=M('details');
        $data=$goods->where("pid=$bh")->select();
        $this->assign('iss',$data);

        $good=M('category');
        $that=$good->where("tag=1")->select();
        $this->assign('sds',$that);

        $that=$good->where("pid=1")->select();
        $this->assign('ses',$that);
        $this->display();
        //获取酒店简介
    }

   
}