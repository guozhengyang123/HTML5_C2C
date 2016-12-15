<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {



    public function login()
    {
        // 判断提交方式
        if (IS_POST) {
            // 实例化Login对象
            $login = D('user');
            // 自动验证 创建数据集
            if (!$data = $login->create()) {
                // 防止输出中文乱码
                header("Content-type: text/html; charset=utf-8");
                exit($login->getError());
            }
            // 组合查询条件
            $where = array();
            $where['username'] = $data['username'];
            $result = $login->where($where)->field('id,username,password')->find();
            // 验证用户名 对比 密码
            if ($result && $result['password'] == $result['password']) {
                // 存储session
                session('uid', $result['id']);          // 当前用户id
                session('username', $result['username']);   // 当前用户名
                // 更新用户登录信息
                $where['id'] = session('uid');
                $this->success('登录成功,正跳转至系统首页...', U('Home/Index/index'));
            } else {
                $this->error('登录失败,用户名或密码不正确!');
            }
        } else {
            $this->display();
        }
    }

     /**
     * 用户注册
     */
    public function register()
    {   
        $this->display();
        if(isset($_POST['sub'])){
            $username=$_POST['username'];    
            $password=$_POST['password'];  
            $sex=$_POST['sex']; 
            $city=$_POST['city'];     
            $school=$_POST['school'];    
            $email=$_POST['email']; 
 
            if(!empty($username)&&!empty($password)){
              
                $user1=M('user');
                $select=$user1->query("select *from think_user where username='$username' and password='$password'");
                if($select){
                    $this->redirect(U('Home/User/login'),3,'该用户已经注册，请直接登录!...页面跳转中...');
                }else{
                   
                    $data=array(
                    'id'=>NULL,
                    'username'=>$username,
                    'password'=>$password,
                    'sex'=>$sex,
                    'city'=>$city,
                    'school'=>$school,
                    'email'=>$email,
                    );
                        
                    $insert=M('user')->add($data);
                    if($insert){ 
                      
                        session_start();
                        $_SESSION['username']=$username;
                        $_SESSION['password']=$password;
    
                        $this->success('注册成功', U('Home/Index/index'), 2);

                    }else{  
                        $this->error('注册失败');
                    }
                }
            }
        }

    } 


    // public function register()
    // {   
    //     $username=I('post.username');
    //     $password=I('post.password');

    //     $User = M('user');
    //     $data['username'] = $username;
    //     $data['password'] = $password;
    //     $User->add($data); 
    //     $this->success('注册成功,正跳转至登录页...', U('Home/User/login')); 

    // }     

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
        // 实例化Verify对象
        $verify = new \Think\Verify();
        // 配置验证码参数
        $verify->fontSize = 14;     // 验证码字体大小
        $verify->length = 4;        // 验证码位数
        $verify->imageH = 34;       // 验证码高度
        $verify->useImgBg = true;   // 开启验证码背景
        $verify->useNoise = false;  // 关闭验证码干扰杂点
        $verify->entry();
    }
   
}
