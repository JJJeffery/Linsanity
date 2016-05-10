<?php
namespace Home\Controller;
use Think\Controller;
class HeaderController extends Controller{
    function _initialize(){
        $this->header();
    }	
	public function header(){
		// 获取栏目信息
    	$cateOb=M('category');
    	$cateInfo=$cateOb->where("isshow=1")->order('corder asc')->select();
    	$this->assign('cateInfo',$cateInfo);
    	// 显示顶部文字广告---- 广告区域1
    	$tadsOb=M('textads');   	
    	$tads1=$tadsOb->order('id desc')->limit("0,4")->select();
    	$this->assign('tads1',$tads1);
    	// 获取时间
    	$time=getDateStr();
    	$this->assign('time',$time);
		$this->display('Header/header');
	}

}