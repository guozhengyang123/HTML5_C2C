<?php
namespace Admin\Controller;
use Think\Controller;
class GoodsController extends Controller {
    public function goods(){
        $goodsModel = M('goods');
        $data = $goodsModel->select();
        $this->assign('goods', $data);
        $this->display();
    }


    public function goodsadd(){
        $categoryModel = M('category');
        $first = $categoryModel->where("tag=1")->select();
        $this->assign('first',$first);
        $second = $categoryModel->where("tag=2")->select();
        $this->assign('second',$second);
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
            $goodsModel = M('goods');

            //组织数据
            $data = $goodsModel->create();

            //设置thumb字段属性(目录+名字)
            $data['name']=I('name');
            $data['cid']=I('cid');
            $data['quantuty']=I('quantuty');
            $data['price']=I('price');
            $data['secprice']=I('secprice');
            $data['condition']=I('condition');
            $data['intro']=I('intro');
            $data['username']=I('username');
            $data['picture']=$info['picture']['savepath'].$info['picture']['savename'];
            //添加
            if($goodsModel->add($data)){
                $this->success('数据添加成功', 'goods');
            }else{
                $this->showError('数据添加失败');
            }
        }
    }
   public function edit(){
        $id = I('id');
        $goodsModel = M('goods');
        $data = $goodsModel->find($id);
        $first = $goodsModel->where("tag=1")->select();
        $this->assign('first',$first);
        $this->assign('goods',$data);
        $this->display();
    }
    public function update(){
        $id = I('id');
        $goodsModel = M('goods');
        $data = array();
        $data['name']=I('name');
        $data['cid']=I('cid');
        $data['picture']=I('picture');
        $data['quantuty']=I('quantuty');
        $data['price']=I('price');
        $data['secprice']=I('secprice');
        $data['condition']=I('condition');
        $data['intro']=I('intro');
        $data['username']=I('username');
        $result = $goodsModel->where("id=$id")->save($data);
        if($result){
                $this->success('数据添加成功', 'goods');
            }else{
                $this->showError('数据添加失败');
            }
    }
     public function delete(){
            $id = I('id');
            // 实例化User对象
            $goodsModel = M('goods');
            // 删除id为$id的用户数据
            if($goodsModel->where("id=$id")->delete())
            {
                $this->success('删除成功');
            }
            else
            {
                $this->error('删除失败');
            }
    }

    public function destory(){
         $id = I('id');
         $goodsModel = M('goods');
        if($goodsModel->where("id=$id")->delete())
        {
            $this->success('数据删除成功');
        }
        else
        {
            $this->error('数据删除失败');
        }
    }

}