<?php
namespace Admin\Controller;
use Think\Controller;
class MessageController extends Controller {
    public function message(){
       $messageModel = M("message");
		$data = $messageModel->select();
		$this->assign('message', $data);
		$this->display();
	}
	public function edit(){
    	//获取id
    	$id = I('id');
    	//获取数据
    	$messageModel = M('message');
    	$data = $messageModel->find($id);

    	//分配数据
    	$this->assign('message',$data);
    	$this->display();
    }
     public function destory(){
    		$id = I('id');
    		// 实例化User对象
    		$messageModel = M('message');
    		// 删除id为$id的用户数据
    		if($messageModel->where("id=$id")->delete())
    		{
    			$this->success('删除成功');
    		}
    		else
    		{
    			$this->error('删除失败');
    		}
    }

}