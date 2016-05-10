<?php
namespace Jeffery\Controller;
use Think\Controller;
class GamesController extends CommonController{
	protected $gamesOb;
	function _initialize(){
		parent::_initialize();
		$gamesOb=D('games');
		$this->gamesOb=$gamesOb;
	}

	function add(){
		// 获取栏目CATEID信息
		$cOb=M('category');
		$cate=$cOb->field('id,title')->where("title='林疯狂' or title='赛季经典'")->select();
		$this->assign('cate',$cate);
		$this->display();
	}

	function addsave(){
		$re=$this->gamesOb->addGames($_POST);
		if($re){
			$this->success('添加比赛成功',U('Games/manage',array('id'=>'7')));
		}else{
			foreach ($this->gamesOb->getError() as $k => $v) {
				$error.=$k.'---'.$v.'<br/>';
			}
			$this->error($error,U('Games/add'));
		}
	}

	function manage(){
		// 获取分类信息
		$cOb=M('category');
		$cate=$cOb->where("title='林疯狂' OR title='赛季经典'")->select();
		$this->assign('cate',$cate);

		// 获得当前的分类ID
		$cateid=(int)$_GET['id'];
		// 获得当前分类标题
		$title=$cOb->field('title')->where("id=$cateid")->select();
		$this->assign('title',$title[0]['title']);

		// 实现分页
		// 获取总记录数
		$count=$this->gamesOb->getInfoCount("cateid=$cateid");
		// 每页显示条数
		$pageSize=11;
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
		// 获取每页显示数据
		$start=$Page->firstRow;
		$gamesInfo=$this->gamesOb->getInfoByList('*',"cateid=$cateid",'dates DESC',"$start,$pageSize");
		$this->assign('pageShow',$pageShow);
		$this->assign('gamesInfo',$gamesInfo);
		$this->display();
	}

	function edit(){
		$id=(int)$_GET['id'];
		// 获取当前ID信息
		$gamesInfo=$this->gamesOb->getInfoById($id);
		$this->assign('gamesInfo',$gamesInfo[0]);

		// 获取分类信息
		$cOb=M('category');
		$cate=$cOb->where("title='林疯狂' OR title='赛季经典'")->select();
		$this->assign('cate',$cate);
		$this->display();
	}

	function editsave(){
		$id=(int)$_GET['id'];
		$re=$this->gamesOb->updateInfoById($id);
		if($re){
			$this->success('比赛编辑成功',U('Games/manage',array('id'=>'7')));
		}else{
			$this->error('比赛编辑失败',U('Games/edit',array('id'=>$id)));
		}
	}

	function delete(){
		$id=(int)$_GET['id'];
		$re=$this->gamesOb->deleteInfoById($id);
		if($re){
			$this->success('比赛删除成功',U('Games/manage',array('id'=>'7')));
		}else{
			$this->error('比赛删除失败',U('Games/manage',array('id'=>'7')));
		}
	}






}