<?php
namespace Jeffery\Controller;
use Think\Controller;
class NewsController extends CommonController{
	protected $newsOb;
	function _initialize(){
		parent::_initialize();
		$newsOb=D('news');
		$this->newsOb=$newsOb;
	}
	// 添加新闻
	function add(){
		// 获取分类cateid
		$cOb=M('category');
		$cateid=$cOb->field('id,title')->select();
		$this->assign('cateid',$cateid);
		$this->display();
	}

	function addsave(){
        // 图片上传
	    $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize = 3145728 ;// 设置附件上传大小
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath = './Uploads/News/'; // 设置附件上传根目录
        $upload->savePath = ''; // 设置附件上传（子）目录
        $upload->saveName = array('uniqid',''); // 保存的文件名
        $upload->autoSub = true;  // 自动使用子目录保存
        $upload->subName = array('date','Y-m-d'); // 子目录创建方式
        // 上传文件
        $info = $upload->upload();
        if(!$info) {// 上传错误提示错误信息
        	$imagename='no.jpg';
            $imagepath='';
            $imgmsg=$upload->getError();
        }else{// 上传成功
            // $this->success('上传成功！');
            // var_dump($info);
            $imagename=$info[0]['savename'];
            $imagepath=$info[0]['savepath'];
            $imgmsg='图片上传成功';
        }

        // 新闻信息入表
		$_POST['imagename']=$imagename;
		$_POST['imagepath']=$imagepath;
		// $_POST['pubtime']=time();
		$re=$this->newsOb->addNews($_POST);
		if($re){
			$this->success('新闻添加成功---'.$imgmsg,U('News/manage',array('id'=>'1')));
		}else{
			foreach ($this->newsOb->getError() as $k => $v) {
				$error.=$k.'>>'.$v.'<br/>';
			}
			$this->error($error.'---'.$imgmsg,U('News/add'),5);
		}
	}

	// 新闻管理
	function manage(){
		// 获取所有分类cateid
		$cOb=M('category');
		$cate=$cOb->field('id,title')->select();
		$this->assign('cate',$cate);

        // 获得当前的分类ID
		$cateid=(int)$_GET['id'];
		// 获得当前分类标题
		$title=$cOb->field('title')->where("id=$cateid")->select();
		$this->assign('title',$title[0]['title']);

		// 实现分页
		$count = $this->newsOb->getListCount("cateid=$cateid");// 查询满足要求的总记录数
		// echo $count;die;
		$pageSize = 3; // 传入总记录数和每页显示的记录数
		$Page = new \Think\Page($count,$pageSize);// 实例化分页类
		// 分页样式定制
		$Page->setConfig('header', '共<b>%TOTAL_ROW%</b>条记录&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
        $Page->setConfig('prev', '上一页');
        $Page->setConfig('next', '下一页');
        $Page->setConfig('last', '末页');
        $Page->setConfig('first', '首页');
        $Page->setConfig('theme', '%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');

		$pageShow = $Page->show();// 分页显示输出
		$start = $Page->firstRow;
		// 进行分页数据查询
		$newsInfo = $this->newsOb->getInfoByList('*',"cateid=$cateid",'id DESC',"$start,$pageSize");
		
		$this->assign('newsInfo',$newsInfo);// 赋值数据集
		$this->assign('pageShow',$pageShow);// 赋值分页输出
		$this->display();
	}

	// 编辑新闻
	function edit(){
		$id=(int)$_GET['id'];
		$newsInfo=$this->newsOb->getInfoById($id);
		// var_dump($newsInfo);
		$this->assign('newsInfo',$newsInfo[0]);

		// 获取所有分类cateid
		$cOb=M('category');
		$cateid=$cOb->field('id,title')->select();
		$this->assign('cateid',$cateid);
		$this->display();
	}

	function editsave(){
        $id=(int)$_GET['id'];
        // 图片上传
	    $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize = 3145728 ;// 设置附件上传大小
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath = './Uploads/News/'; // 设置附件上传根目录
        $upload->savePath = ''; // 设置附件上传（子）目录
        $upload->saveName = array('uniqid',''); // 保存的文件名
        $upload->autoSub = true;  // 自动使用子目录保存
        $upload->subName = array('date','Y-m-d'); // 子目录创建方式
        // 上传文件
        $info = $upload->upload();
        if(!$info) {// 上传错误提示错误信息
            $imgmsg=$upload->getError();
            $imagename=$_POST['imagename'];
            $imagepath=$_POST['imagepath'];
        }else{// 上传成功
            $imgmsg='图片更新成功';
            // var_dump($info);
            $imagename=$info[0]['savename'];
            $imagepath=$info[0]['savepath'];
            // 删除旧照片
            unlink('./Uploads/News/'.$_POST['imagepath'].$_POST['imagename']);           
        }

        // 新闻信息入表
		$_POST['imagename']=$imagename;
		$_POST['imagepath']=$imagepath;

        $re=$this->newsOb->updateInfoById($_POST,$id);
        // var_dump($_POST);
        if($re){
			$this->success('新闻编辑成功---'.$imgmsg,U('News/manage',array('id'=>'1')));
		}else{
			foreach ($this->newsOb->getError() as $k => $v) {
				$error.=$k.'>>'.$v.'<br/>';
			}
			$this->error($error.'---'.$imgmsg,U('News/edit',array('id'=>$id)),5);
		}
	}

	// 删除新闻
	function delete(){
		$id=(int)$_GET['id'];
		// 根据ID获取信息
		$info=$this->newsOb->getInfoById($id);
		$imagename=$info[0]['imagename'];
		$imagepath=$info[0]['imagepath'];
		$re=$this->newsOb->deleteInfoById($id);
		// var_dump($re);die;
		if($re){
			// 删除图片
			unlink('./Uploads/News/'.$imagepath.$imagename);
			$this->success('删除成功',U('News/manage',array('id'=>'1')));
		}else{
			$this->error('删除失败',U('News/manage',array('id'=>'1')));
		}
	}
}