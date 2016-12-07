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
    public function cate(){
        $categoryModel = M('category');

        $data = $categoryModel->select();
        $data2=$categoryModel->select();
        $this->assign('category',$data2);
        //dump($data);
        $this->assign('pid',$data);
        $this->display();

    }

    public function cateadd(){
        $categoryModel = M('category');
        $result = $categoryModel->where("tag=1")->select();
        $this->assign('result',$result);
        $this->display();
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