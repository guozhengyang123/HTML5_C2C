<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Model;
class PasswordController extends Controller
 {
    public function password()
    {
    	$username = $_SESSION['username'];
    	$condetion['username'] = $username;
        $admin = M('admin');
    	$result = $admin->where($condetion)->find();
    	$this->assign('admin',$result);
         $this->display();
    }
    public function revice(){
        $username = $_SESSION['username'];
        $condetion['username'] = $username;
        $admin = M('admin');
        $result = $admin->where($condetion)->select();
        if(I('post.mpass') ==$result[0]['password']) {
            if (I('post.newpass')==$_POST['renewpass']){
                $data['password'] = I('post.newpass');
                  $result = $admin->where($condetion)->save($data);
                  if($result){
                    $this->success('修改成功');
                    }
                   else {
                        $this->error('修改失败');
                    }
            }
        }
    }
}