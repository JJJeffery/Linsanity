<?php
namespace Jeffery\Controller;
use Think\Controller;
class TextadsController extends CommonController{
	protected $tadsOb;
	function _initialize(){
		parent::_initialize();
		$tadsOb=D('textads');
		$this->tadsOb=$tadsOb;
	}
	// 添加文字广告
	function add(){
		$this->display();
	}

	function addsave(){
		$re=$this->tadsOb->addTads();
		if($re){
			$this->success('添加成功',U('Textads/manage'));
		}else{
			foreach($this->tadsOb->getError() as $k=>$v){
				$error.=$k.'---'.$v.'<br/>';
			}
			$this->error($error,U('Textads/add'));
		}
	}

	function manage(){
		// 实现分页
		// 获取总记录数
		$count=$this->tadsOb->getListCount();
		$pageSize=13; // 每页显示数量
		// 实例化分页类
		$Page=new \Think\Page($count,$pageSize);
		// 定制分页样式
		$Page->setConfig('header', '共<b>%TOTAL_ROW%</b>条记录&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
        $Page->setConfig('prev', '上一页');
        $Page->setConfig('next', '下一页');
        $Page->setConfig('last', '末页');
        $Page->setConfig('first', '首页');
        $Page->setConfig('theme', '%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
		// 显示分页
		$pageShow=$Page->show();
        $start=$Page->firstRow; // 每页开始位置
		// 获取每页显示数据
		$tadsInfo=$this->tadsOb->getInfoByList('*','','id DESC',"$start,$pageSize");
		$this->assign('pageShow',$pageShow);
		$this->assign('tadsInfo',$tadsInfo);
		$this->display();
	}

	function edit(){
		$id=(int)$_GET['id'];
		$tadsInfo=$this->tadsOb->getInfoById($id);
		$this->assign('tadsInfo',$tadsInfo[0]);
		$this->display();
	}

	function editsave(){
		$id=(int)$_GET['id'];
		$re=$this->tadsOb->updateInfoById($id);
		if($re){
			$this->success('编辑成功',U('Textads/manage'));
		}else{
			foreach($this->tadsOb->getError() as $k=>$v){
				$error.=$k.'---'.$v.'<br/>';
			}
			$msg='编辑失败'.'<br/>';
			$this->error($msg.$error,U('Textads/edit',array('id'=>$id)));
		}
	}

	function delete(){
		$id=(int)$_GET['id'];
		$re=$this->tadsOb->deleteInfoById($id);
		if($re){
			$this->success('删除成功',U('Textads/manage'));
		}else{
			$this->error('删除失败',U('Textads/manage'));
		}
	}
}