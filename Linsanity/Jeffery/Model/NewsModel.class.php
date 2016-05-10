<?php
namespace Jeffery\Model;
use Think\Model;
class NewsModel extends Model{
	// 批量验证
	protected $patchValidate=true;
	// 自动验证
	protected $_validate=array(
        array('title','1,22','标题格式错误！',0,'length'), // 标题最多19个中文字
        array('href','/^(http|https|ftp)\:\/\/([a-zA-Z0-9\.\-\_\#\/])*$/','链接格式错误！',0,'regex'), // 链接以http://开头
        array('isvideo',array(0,1),'视频选择错误！',0,'in'), // 0表示不是视频，1是视频
		);
	// 自动完成
	protected $_auto=array(
        array('pubtime','time','1','function'),  // 新增时自动完成
		);

	// 添加新闻
	function addNews($arr){
		if($this->create()){
			return $this->add();
		}else{
			return false;
		}
	}
    // 获取新闻
	function getInfoByList($field="*",$where,$order,$limit){
        return $this->field($field)->where($where)->order($order)->limit($limit)->select();
	}
    // 获取总记录数
    function getListCount($where){
    	$arr=$this->field('count(*) as num')->where($where)->select();
    	return $arr[0]['num'];
    } 

    // 根据ID获取新闻数据
    function getInfoById($id){
    	return $this->where("id=$id")->select();
    }

    // 根据ID删除数据
	function deleteInfoById($id){
        return $this->where("id=$id")->delete();
	}
	
    // 根据ID更新数据
	function updateInfoById($arr,$id){
		if($this->create()){
			return $this->where("id=$id")->save();
		}else{
			return false;
		}
	}
}