<?php
namespace Home\Controller;
use Think\Controller;
class DengluzhuceController extends Controller {
    public function denglu(){
               
       if(IS_POST){
                 $VipUsersModel=M('user');
			     $condition=array(
				'username'=>I('post.username'),
				'password'=>I('post.password')
				);
			    //dump($condition);
				$_SESSION['username']=I('post.username');
				$_SESSION['password']=I('post.password');
				$result=$VipUsersModel->where($condition)->count();
				$username=I('post.username');
				$password=I('post.password');
				//dump($username);
				//dump($password);
				//dump($result);
				if($result){
					session('username',I('post.username'));
					session('password',I('post.password'));
					$this->success("登陆成功", '/index.php/home/index/index' );
					//redirect('/index.php/home/index/index',5,'登陆成功');
                    //header('/index.php/home/index/index');
					}
				else{
					$this->error("用户名或密码不正确");
					}
         }
		else{
			$this->display();
		  }


     }
     public function zhuce(){

        $this->display();

    }
     
}
