<?php
namespace Home\Controller;
use Think\Controller;
class BooksController extends Controller {
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
    //书籍报刊总分类
    public function Books(){
        $this->display('category/category');
    }
    //资格证等级考试
    public function level(){
        $result = $this->_db->where("pid=1")->select();
        $this->assign('result',$result);
        $this->display('category/category');
    }
    public function postgraduate(){
        $result = $this->_db->where("pid=1")->select();
        $this->assign('result',$result);
        $this->display('category/category');
    }
    public function textbook(){
        $result = $this->_db->where("pid=1")->select();
        $this->assign('result',$result);
        $this->display('category/category');
    }
    public function internet(){
        $result = $this->_db->where("pid=1")->select();
        $this->assign('result',$result);
        $this->display('category/category');
    }
    public function story(){
        $result = $this->_db->where("pid=1")->select();
        $this->assign('result',$result);
        $this->display('category/category');
    }
    public function others(){
        $result = $this->_db->where("pid=1")->select();
        $this->assign('result',$result);
        $this->display('category/category');
    }
     
}
