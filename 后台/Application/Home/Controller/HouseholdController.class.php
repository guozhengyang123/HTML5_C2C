<?php
namespace Home\Controller;
use Think\Controller;
class HouseholdController extends Controller {
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


    public function Household(){
        $this->display('category/category');
    }
    public function fan(){
        $result = $this->_db->where("id=20")->select();
        $this->assign('result',$result);
        $this->display('category/category');
    }
    public function blower(){
        $result = $this->_db->where("id=20")->select();
        $this->assign('result',$result);
        $this->display('category/category');
    }
    public function voicebox(){
        $result = $this->_db->where("id=20")->select();
        $this->assign('result',$result);
        $this->display('category/category');
    }
    public function patchboard(){
        $result = $this->_db->where("id=20")->select();
        $this->assign('result',$result);
        $this->display('category/category');
    }
    public function waterdispenser(){
        $result = $this->_db->where("id=20")->select();
        $this->assign('result',$result);
        $this->display('category/category');
    }
    public function others(){
        $result = $this->_db->where("id=20")->select();
        $this->assign('result',$result);
        $this->display('category/category');
    }
     
}
