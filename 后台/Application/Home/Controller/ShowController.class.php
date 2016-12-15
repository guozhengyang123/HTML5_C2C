<?php
namespace Home\Controller;
use Think\Controller;
class ShowController extends Controller {
     public function show(){
    	$bh=intval($_REQUEST["id"]);
    	$ever=M('details');
    	$data=$ever->where("id=$bh")->select();
        $hh=$data[0]['mid'];
    	$this->assign('are',$data);
    	$pass=M('user');
    	$list=$pass->where("id=$hh")->select();
    	$this->assign('is',$list);
 		$ever->hahaid=$bh;
 		$ever->where("id=1")->save();
 		$messageModel = M('message');
 		$post=$messageModel->where("goodsId=$bh")->limit('3')->select();
 		$this->assign('result',$post);


        $good=M('category');
        $that=$good->where("tag=1")->select();
        $this->assign('sds',$that);

        $that=$good->where("pid=1")->select();
        $this->assign('ses',$that);

    	$this->display();

    }
   	public function message(){
   		
         $messageModel = M('message');
         $ever=M('details');
         $list=$ever->where(id==1)->select();
         $data['goodsId'] = $list[0]['hahaid'];
         $data['wr_info'] = I('post.text');
         $result = $messageModel->add($data);
    	echo "<meta charset='utf-8' /><script>location.href='".$_SERVER["HTTP_REFERER"]."';alert('亲提交成功了哦');</script>";
    }
}
