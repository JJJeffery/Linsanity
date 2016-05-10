<?php
header('content-type:text/html;charset=utf-8');

/**
 * 截取文件扩展名
 * @param string $filename
 * @return string
 */
function getExt($filename) {
	$arr = explode ( '.', $filename );
	$ext = strtolower ( end ( $arr ) );
	return $ext;
}
/**
 * 截取文件扩展名
 * @param string $filename
 * @return string
 */
function getExt1($filename){
	$arr=explode('.',$filename);
	$ext=array_pop($arr);
	return strtolower($ext);
}

function getExt2($filename){
	$arr=explode('.',$filename);
	$arr=array_reverse($arr);
	$ext=reset($arr);
	return strtolower($ext);
}

function getExt3($filename){
	return strtolower(substr($filename,strrpos($filename)+1));
}

function getExt4($filename){
	return strtolower(trim(strrchr($filename,'.'),'.'));
}

function getExt5($filename){
	$filename=strrev($filename);
	return strtolower(strrev(substr($filename,0,strpos($filename,'.'))));
}

function getExt6($filename){
	return strtolower(pathinfo($filename,PATHINFO_EXTENSION));
}


//默认产生2015年07月15日 星期一
function getDateStr($del=array('年','月','日')){
	$search=array(0,1,2,3,4,5,6);
	$replace=array('日','一','二','三','四','五','六');
	return date("Y{$del[0]}m{$del[1]}d{$del[2]} 星期").str_replace($search, $replace, date('w'));
}

/**
 * 弹出提示信息 并且跳转
 * @param string $mes
 * @param string $url
 */
function alertMes($mes, $url) {
	exit ( "<script type='text/javascript'>
		alert('{$mes}');
		location.href='{$url}';
		</script>" );
}

// 删除目录 （如目录下有文件则先删除文件再删除目录）
function removeDirectory($path) {
	// 打开目录句柄
	$handle = opendir ( $path );
	// 读取目录的条目
	while ( ($file = readdir ( $handle )) !== FALSE) {
		if ($file != '.' && $file != '..') {
			if (is_file ( $path . '/' . $file )) {				
				unlink($path . '/' . $file);
			} else {
				$func = __FUNCTION__;
				$func($path . '/' . $file);
			}
		}
	}
	// 关闭目录句柄
	closedir ( $handle );
	rmdir($path);
}






















