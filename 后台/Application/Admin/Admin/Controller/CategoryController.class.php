<?php
namespace Admin\Controller;
use Think\Controller;
class CategoryController extends Controller {
    public function cate(){
        //1、获取数据
    	$categoryModel = M('category');

        $data = $categoryModel->select();
        $data2=$categoryModel->select();
        $this->assign('category',$data2);
        //dump($data);
        $this->assign('pid',$data);
        $this->display();
    
    }
    public function create(){
        // 1、分配分类数据

        // 实例化User模型
        $categoryModel = M('category');
        // 取到所有对象
        $data = $categoryModel -> select();
        //分配数据
        $data = $this->assign('category',$data);

        //2、显示视图文件
        $this->display();
    }
    public function cateadd(){
        $categoryModel = M('category');
        $result = $categoryModel->where("tag=1")->select();
        $this->assign('result',$result);
        $this->display();
    }
    public function store(){
              
            //$this->success('上传成功！');
            //创建模型
            $categoryModel = M('category');
            //组织数据
            $data = $categoryModel->create();

            //设置thumb字段属性(目录+名字)
            $data['name']=I('name');
            $data['pid']=I('pid');
            $data['tag']=I('tag');
            //添加
            if($categoryModel->add($data)){
                $this->success('数据添加成功', 'cate');
            }else{
                $this->showError('数据添加失败');
            }
        }
        public function destory(){
        $id = I('id');
         $categoryModel = M('category');
        if($categoryModel->where("id=$id")->delete())
        {
            $this->success('数据删除成功');
        }
        else
        {
            $this->error('数据删除失败');
        }
    }

    public function cateedit(){
        $id = I('id');
        $cateModel = M('category');
        $data = $cateModel->find($id);
        $result = $cateModel->where("tag=1")->select();
        $this->assign('result',$result);
        $this->assign('category',$data);
        $this->display();
    }
    public function update(){
        $id = I('id');
        $cateModel = M('category');
        $data = array();
        $data['pid'] = I('pid');
        $data['name'] = I('name');
        $data['tag'] = I('tag');
        $result = $cateModel->where("id=$id")->save($data);
        if($result){
                $this->success('数据添加成功', 'cate');
            }else{
                $this->showError('数据添加失败');
            }
    }

}