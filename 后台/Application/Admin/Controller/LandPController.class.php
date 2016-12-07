<?php
namespace Admin\Controller;
use Think\Controller;
class LandPController extends Controller {
    public function lost(){
       $lostModel = M("lost");
		$data = $lostModel->select();
		$this->assign('lost', $data);
		$this->display();
	}
	public function lostedit(){
    	//获取id
    	$id = I('id');
    	//获取数据
    	$lostModel = M('lost');
    	$data = $lostModel->find($id);

    	//分配数据
    	$this->assign('lost',$data);
    	$this->display();
    }
     public function lostdestory(){
    		$id = I('id');
    		// 实例化User对象
    		$lostModel = M('lost');
    		// 删除id为$id的用户数据
    		if($lostModel->where("id=$id")->delete())
    		{
    			$this->success('删除成功');
    		}
    		else
    		{
    			$this->error('删除失败');
    		}
    }

     public function pick(){
       $pickModel = M("pick");
		$data = $pickModel->select();
		$this->assign('pick', $data);
		$this->display();
	}
	public function pickedit(){
    	//获取id
    	$id = I('id');
    	//获取数据
    	$pickModel = M('pick');
    	$data = $pickModel->find($id);

    	//分配数据
    	$this->assign('pick',$data);
    	$this->display();
    }
     public function pickdestory(){
    		$id = I('id');
    		// 实例化User对象
    		$pickModel = M('pick');
    		// 删除id为$id的用户数据
    		if($pickModel->where("id=$id")->delete())
    		{
    			$this->success('删除成功');
    		}
    		else
    		{
    			$this->error('删除失败');
    		}
    }

}