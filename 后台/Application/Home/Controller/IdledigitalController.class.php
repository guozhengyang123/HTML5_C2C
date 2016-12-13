<?php
namespace Home\Controller;
use Think\Controller;
class IdledigitalController extends Controller {
    protected $_db;
    public function _initialize(){
        //定义数据库模型goods
        $this->_db = M('goods');
        //dump($goods);
        $class=M("category");
        $data=$class->select();
        $list=array();
        foreach($data as $arr){
            $list[$arr['pid']][]=$arr;//重新整理数据排序。
        }

        $this->assign("list",$list);
        $this->display('nav/nav');
    }
    public function Idledigital(){
        $this->display('category/category');

    }
    public function computer(){
        $result = $this->_db->where("id=12")->select();
        $this->assign('result',$result);
        $this->display('category/category');

    }
    public function phone(){
       
        $result = $this->_db->where("id=12")->select();
        $this->assign('result',$result);
        $this->display('category/category');


    }
    public function pad(){
       
        $result = $this->_db->where("id=12")->select();
        $this->assign('result',$result);
        $this->display('category/category');


    }
    public function source(){
       
        $result = $this->_db->where("id=12")->select();
        $this->assign('result',$result);
        $this->display('category/category');


    }
    public function charger(){
       
        $result = $this->_db->where("id=12")->select();
        $this->assign('result',$result);
        $this->display('category/category');


    }
    public function mk(){
       
        $result = $this->_db->where("id=12")->select();
        $this->assign('result',$result);
        $this->display('category/category');


    }
    public function usb(){
       
        $result = $this->_db->where("id=12")->select();
        $this->assign('result',$result);
        $this->display('category/category');


    }
    public function others(){
       
        $result = $this->_db->where("id=12")->select();
        $this->assign('result',$result);
        $this->display('category/category');


    }
     
}
