<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	//获取酒店分类信息
    	$categoryModel = M('categorys');
    	$data = $categoryModel->select();
    	$this->assign('category',$data);
    	$this->display();
    	//获取酒店简介
    }

   
}