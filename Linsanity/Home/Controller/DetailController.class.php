<?php
namespace Home\Controller;
use Think\Controller;
class DetailController extends HeaderController{

	function detail(){
		// 显示图片广告
    	$typeOb=M('imagetype');
    	$iadsOb=M('imageads');
    	// 130X90型--B
    	$typeB=$typeOb->where("typename='130X90'")->select();
    	$tidB=$typeB[0]['id'];
    	$iadsB2=$iadsOb->where("tid=$tidB")->order('id desc')->limit("7,6")->select();
    	$this->assign('iadsB2',$iadsB2);

    	// 400X300型--C
    	$typeC=$typeOb->where("typename='400X300'")->select();
    	$tidC=$typeC[0]['id'];
    	$iadsC1=$iadsOb->where("tid=$tidC")->order('id desc')->limit("0,7")->select();
    	$this->assign('iadsC1',$iadsC1);


		// 根据id获取栏目信息
		$id=(int)$_GET['id'];
		$cateOb=M('category');
		$cateInfo=$cateOb->where("id=$id")->select();
		$this->assign('cateInfo',$cateInfo[0]);

		// 根据id显示正文内容--分页--疯狂系列--A
		$newsOb=M('news');
		$num=$newsOb->field("count(*) as num")->where("cateid=$id")->select();
		$count=$num[0]['num']; // 总记录数
		$pageSize=17; // 每页显示条数
		$Page=new \Think\Page($count,$pageSize); // 实例化分页类
		// 分页样式定制
		$Page->setConfig('header', '共<b>%TOTAL_ROW%</b>条记录&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页');
        $Page->setConfig('prev', '上一页');
        $Page->setConfig('next', '下一页');
        $Page->setConfig('last', '末页');
        $Page->setConfig('first', '首页');
        $Page->setConfig('theme', '%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
		
		$pageShow=$Page->show(); // 显示分页
		// 获取开始数据
		$start=$Page->firstRow;    	
    	$newsInfo=$newsOb->where("cateid=$id")->order('id desc')->limit($start,$pageSize)->select();
    	$this->assign('pageShow',$pageShow);
    	$this->assign('newsInfo',$newsInfo);

        // 友情链接信息
        $cInfo=$cateOb->where("title='友情链接'")->select();
        $cid=$cInfo[0]['id'];
        $newsOb=M('news');       
        $friendlinkInfo1=$newsOb->where("cateid=$cid")->order('id asc')->limit('0,18')->select();
        $friendlinkInfo2=$newsOb->where("cateid=$cid")->order('id asc')->limit('18,18')->select();
        $this->assign('friendlinkInfo1',$friendlinkInfo1);
        $this->assign('friendlinkInfo2',$friendlinkInfo2);

        // 显示尾部信息
        // 获取栏目信息
        $cInfo=$cateOb->where("title='尾部信息'")->select();
        $cid=$cInfo[0]['id'];       
        $newsOb=M('news');
        $footInfo=$newsOb->where("cateid=$cid")->order('id asc')->select();
        $this->assign('footInfo',$footInfo);

		$this->display();
	}

	function games(){
		// 显示图片广告
    	$typeOb=M('imagetype');
    	$iadsOb=M('imageads');
    	// 130X90型--B
    	$typeB=$typeOb->where("typename='130X90'")->select();
    	$tidB=$typeB[0]['id'];
    	// $iadsB1=$iadsOb->where("tid=$tidB")->order('id desc')->limit("0,7")->select();
    	$iadsB2=$iadsOb->where("tid=$tidB")->order('id desc')->limit("7,6")->select();
    	// $this->assign('iadsB1',$iadsB1);
    	$this->assign('iadsB2',$iadsB2);

    	// 400X300型--C
    	$typeC=$typeOb->where("typename='400X300'")->select();
    	$tidC=$typeC[0]['id'];
    	$iadsC1=$iadsOb->where("tid=$tidC")->order('id desc')->limit("0,7")->select();
    	$this->assign('iadsC1',$iadsC1);


		// 根据id获取栏目信息
		$id=(int)$_GET['id'];
		$cateOb=M('category');
		$cateInfo=$cateOb->where("id=$id")->select();
		$this->assign('cateInfo',$cateInfo[0]);

		// 根据id显示正文内容--分页--疯狂系列--A
		$gamesOb=M('games');
		$num=$gamesOb->field("count(*) as num")->where("cateid=$id")->select();
		$count=$num[0]['num']; // 总记录数
		$pageSize=17; // 每页显示条数
		$Page=new \Think\Page($count,$pageSize); // 实例化分页类
		// 分页样式定制
		$Page->setConfig('header', '共<b>%TOTAL_ROW%</b>条记录&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页');
        $Page->setConfig('prev', '上一页');
        $Page->setConfig('next', '下一页');
        $Page->setConfig('last', '末页');
        $Page->setConfig('first', '首页');
        $Page->setConfig('theme', '%HEADER% %FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END%');
		
		$pageShow=$Page->show(); // 显示分页
		// 获取开始数据
		$start=$Page->firstRow;    	
    	$gamesInfo=$gamesOb->where("cateid=$id")->order('dates desc')->limit($start,$pageSize)->select();
    	$this->assign('pageShow',$pageShow);
    	$this->assign('gamesInfo',$gamesInfo);

        // 友情链接信息
        $cInfo=$cateOb->where("title='友情链接'")->select();
        $cid=$cInfo[0]['id'];
        $newsOb=M('news');       
        $friendlinkInfo1=$newsOb->where("cateid=$cid")->order('id asc')->limit('0,18')->select();
        $friendlinkInfo2=$newsOb->where("cateid=$cid")->order('id asc')->limit('18,18')->select();
        $this->assign('friendlinkInfo1',$friendlinkInfo1);
        $this->assign('friendlinkInfo2',$friendlinkInfo2);

        // 显示尾部信息
        // 获取栏目信息
        $cInfo=$cateOb->where("title='尾部信息'")->select();
        $cid=$cInfo[0]['id'];       
        $newsOb=M('news');
        $footInfo=$newsOb->where("cateid=$cid")->order('id asc')->select();
        $this->assign('footInfo',$footInfo);

		$this->display();
	}
}