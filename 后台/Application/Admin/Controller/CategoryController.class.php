<?php
namespace Admin\Controller;
use Think\Controller;
class CategoryController extends Controller {
    public function index(){
        //1、获取数据
    	$categoryModel = M('categorys');
    	$categorys = $categoryModel -> select();
    	//2、分配数据
    	$this->assign('categorys',$categorys);
    	//3、显示视图
    	$this->display();
    }
}