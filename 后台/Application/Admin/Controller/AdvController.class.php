<?php
namespace Admin\Controller;
use Think\Controller;
class AdvController extends Controller {
    public function adv(){
        $advModel = M('adv');
        $data = $advModel->select();
        $this->assign('adv',$data);
        $this->display();
    }
    public function advadd(){
        $advModel = M('adv');
        $data = $advModel->select();
        $this->assign('adv',$data);
        $this->display();
    }

    public function create(){
        // 1、分配客房分类数据

        // 实例化User模型
        $advModel = M('adv');
        // 取到所有对象
        $data = $advModel -> select();
        //分配数据
        $data = $this->assign('adv',$data);

        //2、显示视图文件
        $this->display();
    }

    public function store(){
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize=3145728 ;// 设置附件上传大小
        $upload->exts=array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  = THINK_PATH; // 设置附件上传根目录
        $upload->savePath  ='../Public/uploads/'; // 设置附件上传（子）目录
        // 上传文件 
        $info   =   $upload->upload();
        if(!$info) {// 上传错误提示错误信息
            $this->error($upload->getError());
        }else{// 上传成功
            //$this->success('上传成功！');
            //创建模型
            $advModel = M('adv');

            //组织数据
            $data = $advModel->create();

            //设置thumb字段属性(目录+名字)
            $data['address']=$info['thumb']['savepath'].$info['thumb']['savename'];
            $data['name'] = I('name');
            //添加
            if($advModel->add($data)){
                $this->success('数据添加成功', 'adv');
            }else{
                $this->showError('数据添加失败');
            }
        }
    }

    public function destory(){
        $id = I('id');
        $advModel = M('adv');
        if($advModel->where("id=$id")->delete())
        {
            $this->success('数据删除成功!');
        }
        else{
            $this->error('数据删除失败！');
        }

    }
}
