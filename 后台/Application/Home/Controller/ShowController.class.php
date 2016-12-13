<?php
namespace Home\Controller;
use Think\Controller;
class ShowController extends Controller {
    public function message(){
         $text= I('post.text');
         $messageModel = M('message');
         $data = array();
         $data['goodsId'] = I('get.goodsId');
         $data['wr_info'] = I('post.text');
         //$data['time'] = data("Y-m-d H:i:s",time());
         $result = $messageModel->add($data);
         $this->assign('result',$result);
         $this->display('show');
       
    }

   
}