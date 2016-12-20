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
				$code= I('post.verify');
	            if(check_code($code) === false){
	                $this->error('验证码错误');
	            }
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
	/**
     * 验证码
     */
    public function verify()
    {
        $config =    array(
            'fontSize'    =>    30,    // 验证码字体大小
            'length'      =>    4,     // 验证码位数
            'useNoise'    =>    false, // 关闭验证码杂点
        );
        $Verify =     new \Think\Verify($config);
        $Verify->entry();
    }	 
}