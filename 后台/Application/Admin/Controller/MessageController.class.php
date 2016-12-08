<?php
namespace Admin\Controller;
use Think\Controller;
class MessageController extends Controller {
    public function message(){
       $messageModel = M("message");
		$data = $messageModel->select();
       // dump($data);
		$this->assign('message', $data);
		$this->display();
	}

     public function destory(){
    		$id = I('id');
            //dump($id);
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