<?php
namespace Home\Controller;
use Think\Controller;
class CategoryController extends Controller {
    public function category(){
        //获取酒店分类信息
        $bh=intval($_REQUEST["id"]);
        $goods=M('category');
        $data=$goods->where("id=$bh")->select();
        $hhh=$data[0]['pid'];
        if(0==$hhh){
        $this->assign("ess",$data);
        $poss=$goods->where("pid=$bh")->select();
        $this->assign("poss",$poss);

        $poss=$goods->where("pid=$bh")->limit('1')->select();
        $hhhh=$poss[0]['id'];
        $this->assign("pos",$poss);

        $goods=M('goods');
        $data=$goods->where("cid=$hhhh")->select();
        $this->assign('iss',$data);
    }
    else{
        $goods=$goods->where("id=$hhh")->select();
        $this->assign("ess",$goods);
        $goods=M('category');
        $poss=$goods->where("pid=$hhh")->select();
        $this->assign("poss",$poss);
        $poss=$goods->where("id=$bh")->select();
        $this->assign("pos",$poss);

        $goods=M('goods');
        $data=$goods->where("cid=$bh")->select();
        $this->assign('iss',$data);
    }
         $class=M("category");
        $data=$class->select();
        $list=array();
        foreach($data as $arr){
            $list[$arr['pid']][]=$arr;
        }
        $this->assign("list",$list);
        $this->display();
        //获取酒店简介
    }

   
}