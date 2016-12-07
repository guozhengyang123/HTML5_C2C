<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
     public function login(){
    	 if(IS_POST){
                 $adminUsersModel=M('admin');
			     $condition=array(
				'username'=>I('post.username'),
				'password'=>I('post.password')
				);
				$_SESSION['username']=I('post.username');
				$result=$adminUsersModel->where($condition)->count();
				if($result==1){
					session('username',I('post.username'));
					$this->success("登陆成功",U('Index/index'));
					}
				else{
					$this->error("用户名或密码不正确");				
					}
         }  
		else{
			$this->display();
		  }

	    }	 
	}