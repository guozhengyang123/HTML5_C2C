<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {



    public function login()
    {
        // if(IS_POST){
        //     $homeUsersModel=M('user');
        //     $condition=array(
        //     'username'=>I('post.username'),
        //     'password'=>I('post.password')
        //     );
        //     $code= I('post.verify');
        //     if(check_code($code) === false){
        //         $this->error('验证码错误');
        //     }
        //     $_SESSION['username']=I('post.username');
        //     $result=$homeUsersModel->where($condition)->count();
        //     if($result==1){
        //         session('username',I('post.username'));
        //         $this->success("登陆成功",U('Home/Index/index'));
        //         }
        //     else
        //         {
        //             $this->error("用户名或密码不正确");              
        //         }
        // }
        // else{
        //     $this->display();
        // }
        if(IS_POST){
                $homeUsersModel=M('user');
                $condition=array(
                'username'=>I('post.username'),
                'password'=>I('post.password')
                );
                $code= I('post.verify');
                if(check_code($code) === false){
                    $this->error('验证码错误');
                }
                $_SESSION['username']=I('post.username');
                $result=$homeUsersModel->where($condition)->count();
                if($result==1){
                    session('username',I('post.username'));
                    $this->success("登陆成功",U('Home/Index/index'));
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
     * 用户注册
     */
    public function register()
    {   
        if (IS_POST){

            $username=I('post.username');
            $password=I('post.password');
            $school=I('post.school');
            $college=I('post.college');
            $email=I('post.email');

            $user1=M('user');   
            $data=array(
                'username'=>$username,
                'password'=>$password,
                'school'=>$school,
                'college'=>$college,
                'email'=>$email,
            );
            $_SESSION['username']=I('post.username');
            $_SESSION['password']=I('password');
            $_SESSION['email']=I('email');
            if(!$_SESSION['username']){
                $this->error("用户名不能为空");
            }
            else if(!$_SESSION['password']){
                $this->error("密码不能为空");
            }
            else if(!$_SESSION['email']){
                $this->error("邮箱不能为空");
            }
            if($user1->add($data)){
                $this->success('注册成功,正跳转至登录页...',U('Home/User/login'),2);
            }
            else {
                $this->error('注册失败');
            }       
        }
        else {
            $this->display();
        }
      
        // $rules = array(
        //     array('username', 'require', '用户名必须填写！'), 
        //     array('username','','用户名已经存在！',1,'unique',1),
        //     array('password','3,15','用户名长度必须在3-15位之间！',0,'length'),
        //     array('password', 'require', '密码必须填写！'),
        //     array('password','6,15','密码长度必须在6-15位之间！',0,'length'),
        //     array('email', 'require', '邮箱必须填写！',),
        //     array('email','email','邮箱格式错误！',2),
        //     array('verify','require','验证码必须！')
        // );
        // $User = M("user"); 
        // if (!$User->validate($rules)->create()){
             
        //      exit($User->getError());
        // }else{
             
        //      $User->add();
        // }

    } 

    /**
     * 用户注销
     */
    public function logout()
    {
        // 清楚所有session
        session(null);
        redirect(U('Home/User/login'), 2, 'Exiting...');
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
