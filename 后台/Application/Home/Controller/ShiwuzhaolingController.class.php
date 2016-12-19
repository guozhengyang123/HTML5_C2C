<?php
namespace Home\Controller;
use Think\Controller;
use Think\Upload;
class ShiwuzhaolingController extends Controller {

    public function image(){
    	$class=M("category");
        $data=$class->select();
        $list=array();
        foreach($data as $arr){
            $list[$arr['pid']][]=$arr;
        }
        $this->assign("list",$list);

		$this->display();
    }//image()

    public function diushi(){
    	$class=M("category");
        $data=$class->select();
        $list=array();
        foreach($data as $arr){
            $list[$arr['pid']][]=$arr;
        }
        $this->assign("list",$list);

    	$this->display();
    }//diushi()

    public function diushideal(){
    	//var_dump($_POST);
    	if (IS_POST) {
			$user = M('lost');
			//$data['name'] = $_POST['name'];
			$data=$_POST;
			session('[start]'); 
			// session('id','5');  
			$data['pubman']= session('uid');
			$data['pubtime']=date("Y-m-d H-i-s" ,time());

			// 取得成功上传的文件信息
			//$info=$upload()->upload();
			// 保存当前数据对象
			
			$upload = new Upload(C('FILE_UPLOAD'));
			$info = $upload -> upload($_FILES);
			//dump($info);
			if (!$info) {
				# code...
				$this->error($upload->getError());
				exit;
			}else{
				foreach ($info as $file) {
					# code...
					$imageurl = $file['rootpath'].$file['savepath'].$file['savename'];

				}
			}
			//dump($imageurl);
			$data['imgurl'] = $imageurl;
			


			$result=$user->data($data)->add();
			//var_dump($result);
			// if($result){    //设置成功后跳转页面的地址，默认的返回页面是$_SERVER['HTTP_REFERER']    								
			// 	//var_dump($data);
			// 	 echo "<script>alert('商品发布成功！');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
			// } 
			// else {    //错误页面的默认跳转页面是返回前一页，通常不需要设置    
			// 	echo "<script>alert('上传失败，请重新提交');history.go(-1)</script>"; 
			// }
			if($result)
		        {	
		            $this->success('信息发布成功！','image');
		        }
		        else
		        {
		            $this->error('信息发布失败，请重新进行尝试');
		        }
		}
    	
    }//diushideal()   

    public function zhaoling(){

    	$class=M("category");
        $data=$class->select();
        $list=array();
        foreach($data as $arr){
            $list[$arr['pid']][]=$arr;
        }
        $this->assign("list",$list);
    	$this->display();
    }//zhaoling()

   public function zhaolingdeal(){
   		//var_dump($_POST);

    	if (IS_POST) {
			$user = M('pick');
			//$data['name'] = $_POST['name'];
			$data=$_POST;
			session('[start]'); 
			// session('id','5');  
			$data['pubman']= session('uid');
			$data['pubtime']=date("Y-m-d H-i-s" ,time());

			// 取得成功上传的文件信息
			//$info=$upload()->upload();
			// 保存当前数据对象
			
			$upload = new Upload(C('FILE_UPLOAD'));
			$info = $upload -> upload($_FILES);
			//dump($info);
			if (!$info) {
				# code...
				$this->error($upload->getError());
				exit;
			}else{
				foreach ($info as $file) {
					# code...
					$imageurl = $file['rootpath'].$file['savepath'].$file['savename'];

				}
			}
			//dump($imageurl);
			$data['imgurl'] = $imageurl;
			


			$result=$user->data($data)->add();
			//var_dump($result);
			// if($result){    //设置成功后跳转页面的地址，默认的返回页面是$_SERVER['HTTP_REFERER']    								
			// 	//var_dump($data);
			// 	 echo "<script>alert('商品发布成功！');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
			// } 
			// else {    //错误页面的默认跳转页面是返回前一页，通常不需要设置    
			// 	echo "<script>alert('上传失败，请重新提交');history.go(-1)</script>"; 
			// }
			if($result)
		        {	
		            $this->success('信息发布成功！','image');
		        }
		        else
		        {
		            $this->error('信息发布失败，请重新进行尝试');
		        }
		}
    	
    }//zhaolingdeal()

}//class




//     public function gett(){
//     	//var_dump ("123");
//     	if (IS_POST) {
//     		$cateid = I('post.name');
//     		$data=M('category');
//     		$cate=$data->where("pid=$cateid")->select();
//     		$this->ajaxReturn($cate,'json');
//     	}else{
//     		//echo("出错了");
//     		$name[name]="lisi";
//     		$name[id]=1;
//     		$this->ajaxReturn($name,'json');
//     	// }
//     	}
    	

//     }//gett()
	
// 	public function uploadfile(){    

		
// 		if (IS_POST) {
// 			$user = M('pub');
// 			//$data['name'] = $_POST['name'];
// 			$data=$_POST;
// 			session('[start]'); 
// 			// session('id','5');  
// 			$data['pubman']= session('uid');
// 			$data['time']=date("Y-m-d H-i-s" ,time());

// 			// 取得成功上传的文件信息
// 			//$info=$upload()->upload();
// 			// 保存当前数据对象
			
// 			$upload = new Upload(C('FILE_UPLOAD'));
// 			$info = $upload -> upload($_FILES);
// 			//dump($info);
// 			if (!$info) {
// 				# code...
// 				dump($upload->getError());
// 				exit;
// 			}else{
// 				foreach ($info as $file) {
// 					# code...
// 					$imageurl = $file['rootpath'].$file['savepath'].$file['savename'];

// 				}
// 			}
// 			//dump($imageurl);
// 			$data['imgurl1'] = $imageurl;
			


// 			$result=$user->data($data)->add();
// 			//var_dump($result);
// 			// if($result){    //设置成功后跳转页面的地址，默认的返回页面是$_SERVER['HTTP_REFERER']    								
// 			// 	//var_dump($data);
// 			// 	 echo "<script>alert('商品发布成功！');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
// 			// } 
// 			// else {    //错误页面的默认跳转页面是返回前一页，通常不需要设置    
// 			// 	echo "<script>alert('上传失败，请重新提交');history.go(-1)</script>"; 
// 			// }
// 			if($result)
// 		        {	
// 		            $this->success('商品发布成功！等待管理员审核');
// 		        }
// 		        else
// 		        {
// 		            $this->error('商品发布失败');
// 		        }
// 		 }


// 	}// uploadfile()
// }