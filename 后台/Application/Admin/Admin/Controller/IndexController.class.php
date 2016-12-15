<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	//$categoryModel = M('categorys');
    	//$categorys = $categoryModel->select(); // 取到所有数据
    	//dump($categorys);					   //打印所有数据
    	$this->display();
    }
}