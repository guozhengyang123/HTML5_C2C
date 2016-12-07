<?php
namespace Admin\Controller;
use Think\Controller;
class OrderController extends Controller {
    public function order(){
       $orderModel = M("order");
		$data = $orderModel->select();
		$this->assign('order', $data);
		$this->display();
	}
	public function edit(){
    	//获取id
    	$id = I('id');
    	//获取数据
    	$orderModel = M('order');
    	$data = $orderModel->find($id);

    	//分配数据
    	$this->assign('order',$data);
    	$this->display();
    }
     public function destory(){
    		$id = I('id');
    		// 实例化User对象
    		$orderModel = M('order');
    		// 删除id为$id的用户数据
    		if($orderModel->where("id=$id")->delete())
    		{
    			$this->success('删除成功');
    		}
    		else
    		{
    			$this->error('删除失败');
    		}
    }

     

}