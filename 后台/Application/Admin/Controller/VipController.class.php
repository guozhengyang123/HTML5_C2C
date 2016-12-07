<?php
namespace Admin\Controller;
use Think\Controller;
class VipController extends Controller {
    public function vip(){
        $userModel = M('user');
        $data = $userModel->select();
        $this->assign('vip', $data);
        $this->display();
   
    }

     public function create(){
        // 1、分配分类数据

        // 实例化User模型
        $userModel = M('user');
        // 取到所有对象
        $data = $userModel -> select();
        //分配数据
        $data = $this->assign('vip',$data);

        //2、显示视图文件
        $this->display();
    }

     public function store(){
              
            //$this->success('上传成功！');
            //创建模型
            $userModel = M('user');
            //组织数据
            $data = $userModel->create();

            //设置thumb字段属性(目录+名字)
            //  
            $data['id']=I('id');
            $data['username']=I('username');
          
            $data['password']=I('password');
            $data['sex']=I('sex');
            $data['city']=I('city');
            $data['email']=I('email');
            $data['school']=I('school');
            //添加
            if($userModel->add($data)){
                $this->success('数据添加成功', 'vip');
            }else{
                $this->showError('数据添加失败');
            }
        }



    public function destory(){
         $id = I('id');
         $userModel = M('user');
        if($userModel->where("id=$id")->delete())
        {
            $this->success('数据删除成功');
        }
        else
        {
            $this->error('数据删除失败');
        }
    }
}