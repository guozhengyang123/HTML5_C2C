<?php
namespace Home\Controller;
use Think\Controller;
class TravelController extends Controller {
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
    public function travel(){
        $this->display('category/category');
    }
    public function bike(){
        $result = $this->_db->where("id=26")->select();
        $this->assign('result',$result);
        $this->display('category/category');
    }
    public function tram(){
        $result = $this->_db->where("id=26")->select();
        $this->assign('result',$result);
        $this->display('category/category');
    }
    public function rollerskating(){
        $result = $this->_db->where("id=26")->select();
        $this->assign('result',$result);
        $this->display('category/category');
    }
    public function trunk(){
        $result = $this->_db->where("id=26")->select();
        $this->assign('result',$result);
        $this->display('category/category');
    }
    public function tent(){
        $result = $this->_db->where("id=26")->select();
        $this->assign('result',$result);
        $this->display('category/category');
    }
    public function bag(){
        $result = $this->_db->where("id=26")->select();
        $this->assign('result',$result);
        $this->display('category/category');
    }
    public function others(){
        $result = $this->_db->where("id=26")->select();
        $this->assign('result',$result);
        $this->display('category/category');
    }

}
