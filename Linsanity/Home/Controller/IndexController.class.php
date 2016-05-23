<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends HeaderController {
    public function index(){
    	// 显示文字广告信息---- 广告区域2-9。
    	$tadsOb=M('textads');   	
    	$tads2=$tadsOb->order('id desc')->limit("4,8")->select();
    	$tads3=$tadsOb->order('id desc')->limit("12,8")->select();
    	$tads4=$tadsOb->order('id desc')->limit("20,8")->select();
    	$tads5=$tadsOb->order('id desc')->limit("28,8")->select();
    	$tads6=$tadsOb->order('id desc')->limit("36,8")->select();
    	$tads7=$tadsOb->order('id desc')->limit("44,8")->select();
    	$this->assign('tads2',$tads2);
    	$this->assign('tads3',$tads3);
    	$this->assign('tads4',$tads4);
    	$this->assign('tads5',$tads5);
    	$this->assign('tads6',$tads6);
    	$this->assign('tads7',$tads7);

    	// 显示图片广告
    	$typeOb=M('imagetype');
    	$iadsOb=M('imageads');
    	// 1000X90型--A
    	$typeA=$typeOb->where("typename='1000X90'")->select();
    	$tidA=$typeA[0]['id'];
    	$iadsA1=$iadsOb->where("tid=$tidA")->order('id desc')->limit("0,1")->select();
        $iadsA2=$iadsOb->where("tid=$tidA")->order('id desc')->limit("1,1")->select();
    	$iadsA3=$iadsOb->where("tid=$tidA")->order('id desc')->limit("2,1")->select();
    	$this->assign('iadsA1',$iadsA1);
        $this->assign('iadsA2',$iadsA2);
    	$this->assign('iadsA3',$iadsA3);
    	// 130X90型--B
    	$typeB=$typeOb->where("typename='130X90'")->select();
    	$tidB=$typeB[0]['id'];
    	$iadsB1=$iadsOb->where("tid=$tidB")->order('id desc')->limit("0,7")->select();
    	// $iadsB2=$iadsOb->where("tid=$tidB")->order('id desc')->limit("7,9")->select();
    	$this->assign('iadsB1',$iadsB1);
    	// $this->assign('iadsB2',$iadsB2);

    	// 显示正文内容
        $cateOb=M('category'); 
    	$newsOb=M('news');
    	// 疯狂视频--A
    	$cateA=$cateOb->where("title='疯狂视频'")->select();
    	$cateid=$cateA[0]['id'];
    	$newsA=$newsOb->where("cateid=$cateid")->order('id desc')->limit('0,14')->select();
    	$this->assign('newsA',$newsA);

    	// 疯狂新闻--B
    	$cateB=$cateOb->where("title='疯狂新闻'")->select();
    	$cateid=$cateB[0]['id'];
    	$newsB=$newsOb->where("cateid=$cateid")->order('id desc')->limit('0,14')->select();
    	$this->assign('newsB',$newsB);

    	// 疯狂新闻--C
    	$cateC=$cateOb->where("title='疯狂体育'")->select();
    	$cateid=$cateC[0]['id'];
    	$newsC=$newsOb->where("cateid=$cateid")->order('id desc')->limit('0,14')->select();
    	$this->assign('newsC',$newsC);

    	// 疯狂趣事--D
    	$cateD=$cateOb->where("title='疯狂趣事'")->select();
    	$cateid=$cateD[0]['id'];
    	$newsD=$newsOb->where("cateid=$cateid")->order('id desc')->limit('0,14')->select();
    	$this->assign('newsD',$newsD);

    	// 疯狂科技--E
    	$cateE=$cateOb->where("title='疯狂科技'")->select();
    	$cateid=$cateE[0]['id'];
    	$newsE=$newsOb->where("cateid=$cateid")->order('id desc')->limit('0,14')->select();
    	$this->assign('newsE',$newsE);

    	// 疯狂娱乐--F
    	$cateF=$cateOb->where("title='疯狂娱乐'")->select();
    	$cateid=$cateF[0]['id'];
    	$newsF=$newsOb->where("cateid=$cateid")->order('id desc')->limit('0,14')->select();
    	$this->assign('newsF',$newsF);

    	// 林疯狂--G
    	$gamesOb=M('games');
    	$cateG=$cateOb->where("title='林疯狂'")->select();
    	$cateid=$cateG[0]['id'];
    	$gamesG=$gamesOb->where("cateid=$cateid")->order('dates desc')->limit('0,14')->select();
    	$this->assign('gamesG',$gamesG);

    	// 赛季经典--H
    	$cateH=$cateOb->where("title='赛季经典'")->select();
    	$cateid=$cateH[0]['id'];
    	$gamesH=$gamesOb->where("cateid=$cateid")->order('dates desc')->limit('0,14')->select();
    	$this->assign('gamesH',$gamesH);

    	// 关于疯狂--I
    	$cateI=$cateOb->where("title='关于疯狂'")->select();
    	$cateid=$cateI[0]['id'];
    	$newsI=$newsOb->where("cateid=$cateid")->order('id desc')->limit('0,14')->select();
    	$this->assign('newsI',$newsI);

        // 友情链接信息
        $cInfo=$cateOb->where("title='友情链接'")->select();
        $id=$cInfo[0]['id'];       
        $friendlinkInfo1=$newsOb->where("cateid=$id")->order('id asc')->limit('0,18')->select();
        $friendlinkInfo2=$newsOb->where("cateid=$id")->order('id asc')->limit('18,18')->select();
        $this->assign('friendlinkInfo1',$friendlinkInfo1);
        $this->assign('friendlinkInfo2',$friendlinkInfo2);

        // 显示尾部信息
        // 获取栏目信息
        $cInfo=$cateOb->where("title='尾部信息'")->select();
        $id=$cInfo[0]['id'];       
        $footInfo=$newsOb->where("cateid=$id")->order('id asc')->select();
        $this->assign('footInfo',$footInfo);

        // 寻求合作
        $cInfo=$cateOb->where("title='寻求合作'")->select();
        $id=$cInfo[0]['id'];
        $emailInfo=$newsOb->where("cateid=$id")->order('id asc')->limit('0,1')->select();
        $this->assign('emailInfo',$emailInfo[0]);

        $this->display();      
    }

}