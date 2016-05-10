<?php
namespace Jeffery\Controller;
use Think\Controller;
class ImagetypeController extends CommonController{
	protected $imgTypeOb;
	function _initialize(){
		parent::_initialize();
		$imgTypeOb=D('Imagetype');
		$this->imgTypeOb=$imgTypeOb;
	}

	// 添加图片类型
	function add(){
		$this->display();
	}

	function addsave(){
		$re=$this->imgTypeOb->addImgType();
		if($re){
			$this->success('添加成功',U('Imagetype/manage'));
		}else{
			$this->error('添加失败',U('Imagetype/add'));
		}
	}

	function manage(){
		// 获取数据信息
		$info=$this->imgTypeOb->getInfoByList();
		$this->assign('info',$info);
		$this->display();
	}
	function edit(){
		$id=(int)$_GET['id'];
		$info=$this->imgTypeOb->getInfoById($id);
		$this->assign('info',$info[0]);
		$this->display();
	}

	function editsave(){
		$id=(int)$_GET['id'];
		$re=$this->imgTypeOb->updateInfoById($id);
		if($re){
			// 同时修改imageads表imagepath字段值
			// $iob=M('imageads');
			// $imagepath= $_POST['typename'].'/';
			// $iob->data(array('imagepath'=>$imagepath))->save();
			$this->success('编辑成功',U('Imagetype/manage'));
		}else{
			$this->error('编辑失败',U('Imagetype/edit',array('id'=>$id)));
		}
	}

	function delete(){
		$id=(int)$_GET['id'];
		// 根据id获取类型名称
		$typeInfo=$this->imgTypeOb->getInfoById($id);
		$typename=$typeInfo[0]['typename'];
		$re=$this->imgTypeOb->deleteInfoById($id);
		if($re){
			// 删除文件夹
			$path='./Uploads/Imageads/'.$typename;
			if(file_exists($path)){
			    removeDirectory($path);
			}
			$this->success('删除成功',U('Imagetype/manage'));
		}else{
			$this->error('删除失败',U('Imagetype/manage'));
		}
	}
}