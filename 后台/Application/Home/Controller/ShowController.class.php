<?php
namespace Home\Controller;
use Think\Controller;
class ShowController extends Controller {
     public function show(){
    	$bh=intval($_REQUEST["id"]);
    	$goods=M('goods');
    	$data=$goods->where("id=$bh")->select();
    	$this->assign('are',$data);
        $hh=$data[0]['username'];
        $cid=$data[0]['cid'];
    	$pass=M('user');
    	$list=$pass->where("username='%s'",$hh)->select();
    	$this->assign('is',$list);
        $goods=M('now');
 		$goods->hahaid=$bh;
 		$goods->where("id=1")->save();
 		$messageModel = M('message');
 		$post=$messageModel->where("goodsId=$bh")->limit('3')->select();
 		$this->assign('result',$post);


        $class=M("category");
        $data=$class->select();
        $list=array();
        foreach($data as $arr){
            $list[$arr['pid']][]=$arr;
        }
        $this->assign("list",$list);
        $cd=$class->where("id=$cid")->select();
        $pid=$cd[0]['pid'];
        $this->assign('cid',$cd);
        $copy=$class->where("id=$pid")->select();
        $this->assign("pid",$copy);
    	$this->display();

    }
   	public function message(){
         $messageModel = M('message');
         $ever=M('now');
         $list=$ever->where(id==1)->select();
         $data['goodsId'] = $list[0]['hahaid'];
         $data['wr_info'] = I('post.text');
         $result = $messageModel->add($data);
    	echo "<meta charset='utf-8' /><script>location.href='".$_SERVER["HTTP_REFERER"]."';alert('亲提交成功了哦');</script>";
    }
}
