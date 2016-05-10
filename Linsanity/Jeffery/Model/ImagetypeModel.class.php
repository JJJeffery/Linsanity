<?php
namespace Jeffery\Model;
use Think\Model; 
class ImagetypeModel extends Model{
	protected $_validate=array(
		array('typename','/^\d{1,4}X\d{1,4}$/','类型名称不正确',0,'regex'), // 类型名称格式为1000X1000
	);

	// 添加图片类型
	function addImgType(){
		if($this->create()){
			return $this->add();
		}else{
			return false;
		}
	}

	// 获取数据信息
	function getInfoByList($field='*',$where,$order,$limit){
		return $this->field($field)->where($where)->order($order)->limit($limit)->select();
	}
	// 根据ID获取数据
	function getInfoById($id){
		return $this->where("id=$id")->select();
	}

	// 根据ID更新数据
	function updateInfoById($id){
		if($this->create()){
			return $this->where("id=$id")->save();
		}else{
			return false;
		}
	}

	// 根据ID删除数据
	function deleteInfoById($id){
		return $this->where("id=$id")->delete();
	}
	
}