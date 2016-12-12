<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	//获取酒店分类信息
    	/*$indexModel = M('category');

        $data = $indexModel->select();
       
        $this->assign('category',$data2);
        //dump($data);
        $indexModel = M('category');
        $first = $indexModel->where("tag=1")->select();
        $second = $indexModel->where("tag=2")->select();
   
        $this->assign('first',$first);
        $this->assign('second',$second);
        dump($first);
        dump($second);
        $this->display();*/
        $class=M("category");
        $data=$class->select();
        //dump($data);
        $list=array();
        foreach($data as $arr){
            $list[$arr['pid']][]=$arr;//重新整理数据排序。
        }
       // dump($list);
        $this->assign("list",$list);
        $this->display();
    	//获取酒店简介
    }


   
}