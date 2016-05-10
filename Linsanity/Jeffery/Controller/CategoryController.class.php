<?php
namespace Jeffery\Controller;
use Think\Controller;
class CategoryController extends CommonController{
	protected $cateOb;
	function _initialize(){
		parent::_initialize();
        $cateOb=D('category');
        $this->cateOb=$cateOb;
	}
	function add(){
		$this->display();
	}
	function addsave(){
		$re=$this->cateOb->addCate($_POST);
		if($re){
			$this->success('添加成功',U('Category/manage'));
		}else{
			foreach ($this->cateOb->getError() as $k => $v) {
				$error.=$k.'---'.$v."<br/>";
			}
			$this->error($error,U('Category/add'),5);
		}
	}
	function manage(){
		$cateInfo=$this->cateOb->getInfoByList();
		$this->assign('cateInfo',$cateInfo);
		$this->display();
	}
	// 修改排序
	function corder(){
		// var_dump($_POST);
		foreach ($_POST as $k => $v) {
			$id=str_replace('corder','',$k);
			// echo $id.'--';
			$arr=array('corder'=>$v);
			$re.=$this->cateOb->updateInfoById($arr,$id);
		}
		if($re){
			$this->success('排序成功',U('Category/manage'));
		}else{
			$this->error('排序失败',U('Category/manege'));
		}
	}

	// 编辑栏目
	function edit(){
		$id=(int)$_GET['id'];
		// echo $id;
		// $cateOb=D('category');
		$cateInfo=$this->cateOb->getInfoById($id);
		// var_dump($cateInfo);
		$this->assign('cateInfo',$cateInfo);
		$this->display();
	}

	function editsave(){
		$id=(int)$_GET['id'];
		$re=$this->cateOb->updateInfoById($_POST,$id);
		if($re){
			$this->success('编辑成功',U('Category/manage'));
		}else{
			$this->error('编辑失败',U('Category/edit',array('id'=>$id)));
		}
	}

	// 删除数据
	function delete(){
		$id=(int)$_GET['id'];
		$re=$this->cateOb->deleteInfoById($id);
		if($re){
			$this->success('删除成功',U('Category/manage'));
		}else{
			$this->error('删除失败',U('Category/manage'));
		}
	}
}