<?php
namespace Jeffery\Model;
use Think\Model; 
class CategoryModel extends Model{
	// 启动批量验证
	protected $patchValidate = true;
	// 自动验证
	protected $_validate = array(
        array('title','2,6','栏目名称格式错误！',0,'length'), 
        array('isshow',array(0,1),'范围不正确！',0,'in'), 
        array('corder',array(1,15),'范围不正确！',0,'between'), 
    );

    // 添加数据
	function addCate($arr){
		if($this->create()){
			return $this->add();
		}else{
			return false;
		}
	}

	// 获取表数据
	function getInfoByList($field='*',$where,$order,$limit){
		return $this->field($field)->where($where)->order($order)->limit($limit)->select();
	}
	// 根据ID获取数据
	function getInfoById($id){
		$arr=$this->where("id=$id")->select();
		return $arr[0];
	}

	// 根据ID修改排序
	function updateInfoById($arr,$id){
		return $this->data($arr)->where("id=$id")->save();
	}

	// 根据ID删除数据
	function deleteInfoById($id){
		return $this->where("id=$id")->delete();
	}

}