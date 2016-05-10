<?php
namespace Jeffery\Controller;
use Think\Controller;
class ImageadsController extends CommonController{
	protected $iadsOb;
	function _initialize(){
		parent::_initialize();
		$ob=D('Imageads');
		$this->iadsOb=$ob;
	}

	function add(){
		// 获取图片类型名称数据
		$itOb=M('imagetype');
		$info=$itOb->select();
		$this->assign('info',$info);
		$this->display();
	}

	function addsave(){
		
		// 根据tid查询类型名称，来作为文件夹名
		$tid=(int)$_POST['tid'];
		$itOb=M('imagetype');
		$typeInfo=$itOb->field('typename')->where("id=$tid")->select();
		$tName=$typeInfo[0]['typename'];
        // echo $tName;
		// 图片上传
	    $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize = 10485760;// 设置附件上传大小
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath = './Uploads/Imageads/'; // 设置附件上传根目录
        $upload->savePath = $tName.'/'; // 设置附件上传（子）目录，以类型名称作为文件夹名
        $upload->saveName = array('uniqid',''); // 保存的文件名
        $upload->autoSub = false;  // 自动使用子目录保存
        // $upload->subName = array('date','Y-m-d'); // 子目录创建方式
        // 上传文件
        $info = $upload->upload();
        if(!$info) {// 上传错误提示错误信息
        	$imagename='no.jpg';
            $imagepath='';
            $imgmsg=$upload->getError();
        }else{// 上传成功
            // $this->success('上传成功！');
            // var_dump($info);die;
            $imagename=$info['upload']['savename'];
            $imagepath=$info['upload']['savepath'];
            $imgmsg='图片上传成功';
        }

        // 数据信息入表
        $_POST['imagename']=$imagename;
        $_POST['imagepath']=$imagepath;
        // var_dump($_POST);
        $re=$this->iadsOb->addIads($_POST);
        if($re){
        	$this->success('广告添加成功'.'---'.$imgmsg,U('Imageads/manage',array('tid'=>'1')));
        }else{
        	foreach($this->iadsOb->getError() as $k=>$v){
        		$error.=$k.'---'.$v.'<br/>';
        	}
        	$msg='广告添加失败'.'<br/>';
        	$this->error($msg.$error.$imgmsg,U('Imageads/add'));
        }
	}

	function manage(){
		// 获取图片分类信息
		$itOb=M('imagetype');
		$type=$itOb->select();
		$this->assign('type',$type);
		// 根据类型分类
		$tid=(int)$_GET['tid'];
		// 获得当前分类
		$curtype=$itOb->where("id=$tid")->select();
		$this->assign('curtype',$curtype[0]['typename']);

		// 实现分页
		// 获取总记录数
		$count=$this->iadsOb->getListCount("tid=$tid");
		$pageSize=3;
		// 实例化分页类
		$Page=new \Think\Page($count,$pageSize);
		// 分页样式定制
		$Page->setConfig('header', '共<b>%TOTAL_ROW%</b>条记录&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
        $Page->setConfig('prev', '上一页');
        $Page->setConfig('next', '下一页');
        $Page->setConfig('last', '末页');
        $Page->setConfig('first', '首页');
        $Page->setConfig('theme', '%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
		// 显示分页
		$pageShow=$Page->show();
		// 分页数据显示
		$start=$Page->firstRow;
		$iadsInfo=$this->iadsOb->getInfoByList('*',"tid=$tid","id desc","$start,$pageSize");
		// var_dump($iadsInfo);die;
		// 发送数据到模板
		$this->assign('pageShow',$pageShow);
		$this->assign('iadsInfo',$iadsInfo);
		$this->display();
	}

	function edit(){
		// 根据当前ID获取信息
		$id=(int)$_GET['id'];
		$info=$this->iadsOb->getInfoById($id);
		$this->assign('info',$info[0]);
		// var_dump($info);

		// 获取图片类型
		$tOb=M('imagetype');
		$type=$tOb->select();
		// var_dump($type);
		$this->assign('type',$type);
		$this->display();
	}

	function editsave(){
		$id=(int)$_GET['id'];
		// 根据tid查询类型名称，来作为文件夹名
		$tid=(int)$_POST['tid'];
		$itOb=M('imagetype');
		$typeInfo=$itOb->field('typename')->where("id=$tid")->select();
		$tName=$typeInfo[0]['typename'];
		// 图片上传
	    $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize = 10485760;// 设置附件上传大小
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath = './Uploads/Imageads/'; // 设置附件上传根目录
        $upload->savePath = $tName.'/'; // 设置附件上传（子）目录，以类型名称作为文件夹名
        $upload->saveName = array('uniqid',''); // 保存的文件名
        $upload->autoSub = false;  // 自动使用子目录保存
        // $upload->subName = array('date','Y-m-d'); // 子目录创建方式
        // 上传文件
        $info = $upload->upload();
        if(!$info) {// 上传错误提示错误信息
            $imgmsg=$upload->getError();
            $imagename=$_POST['imagename'];
            $imagepath=$_POST['imagepath'];
        }else{// 上传成功
            // $this->success('上传成功！');
            $imagename=$info['upload']['savename'];
            $imagepath=$info['upload']['savepath'];
            $imgmsg='图片更新成功';
            // 删除旧图片
            unlink('./Uploads/Imageads/'.$_POST['imagepath'].$_POST['imagename']);
        }

        // 修改的数据信息入表
        $_POST['imagename']=$imagename;
        $_POST['imagepath']=$imagepath;
        // var_dump($_POST);die;
        $re=$this->iadsOb->updateInfoById($id,$_POST);
        if($re){
        	$this->success('广告编辑成功'.'---'.$imgmsg,U('Imageads/manage',array('tid'=>'1')));
        }else{
        	foreach($this->iadsOb->getError() as $k=>$v){
        		$error.=$k.'---'.$v.'<br/>';
        	}
        	$msg='广告编辑失败'.'<br/>';
        	$this->error($msg.$error.$imgmsg,U('Imageads/edit',array('id'=>$id)));
        }
	}

	function delete(){
		$id=(int)$_GET['id'];
		// 根据ID获取信息
		$info=$this->iadsOb->getInfoById($id);
		// var_dump($info);die;
		$imagename=$info[0]['imagename'];
		$imagepath=$info[0]['imagepath'];
		// 删除数据
		$re=$this->iadsOb->deleteInfoById($id);
		if($re){
			// 删除图片
			unlink('./Uploads/Imageads/'.$imagepath.$imagename);
			$this->success('删除成功',U('Imageads/manage',array('tid'=>'1')));
		}else{
			$this->error('删除失败',U('Imageads/manage',array('tid'=>'1')));
		}
	}
	
}