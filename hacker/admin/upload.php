<?


require("../inc.php");

$root = dirname(__FILE__)."/../upload/";

$file = $root.$_FILES["file"]["name"];

if(strtoupper(strstr($file, ".")) == "php"){
	hint("显然， 无法直接扔一个php 上传。  ", true);	
}

if(move_uploaded_file($_FILES["file"]["tmp_name"],   $file)){
	echo "保存成功 <br>";	
	echo "文件名: ".$file;
	
}