<?php
namespace Home\Controller;
use Think\Controller;
class TempController extends Controller {
    public function hxjz(){
    	// 获取栏目信息
    	$cateOb=M('category');
    	$cateInfo=$cateOb->where("isshow=1")->order('corder asc')->select();
    	$this->assign('cateInfo',$cateInfo);

    	// 显示尾部信息
        // 获取栏目信息
        $cInfo=$cateOb->order('id desc')->limit('1')->select();
        $id=$cInfo[0]['id'];
        $newsOb=M('news');       
        $footInfo=$newsOb->where("cateid=$id")->order('id asc')->select();
        $this->assign('footInfo',$footInfo);
        $this->display('');
    }
}