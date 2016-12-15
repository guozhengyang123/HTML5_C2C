<?php
namespace Home\Controller;
use Think\Controller;
class MessageController extends Controller {

      public function message(){
   		// $bh=$_SESSION["id"];
   		// echo 'nIHAO';
     //     $messageModel = M('message');
     //     $data = array();
     //     $data['goodsId'] = "$bh";
     //     $data['wr_info'] = I('post.text');
     //     //$data['time'] = data("Y-m-d H:i:s",time());
     //     $result = $messageModel->add($data);
     //     $this->assign('result',$result);
         $list='think';
         $this->assign('result',$list);
         $this->display('Show/show');
       
    }
 }