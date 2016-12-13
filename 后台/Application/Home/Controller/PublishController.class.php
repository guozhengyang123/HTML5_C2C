<?php
namespace Home\Controller;
use Think\Controller;
class PublishController extends Controller {
    public function publish(){

        $class=M("category");
        $data=$class->select();
  
        $list=array();
        foreach($data as $arr){
            $list[$arr['pid']][]=$arr;//重新整理数据排序。
        }
      
        $this->assign("list",$list);
        $this->display();

    }
   
}
