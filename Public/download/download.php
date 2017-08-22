<?php
 if(isset($_GET['filename'])){
 	$filename=$_GET['filename'];
 }
 else exit;
 $path='./file/'.$filename;
 $path=iconv('UTF-8','GBK',$path);
 if(file_exists($path))
 {
 $fp=fopen($path,'r');
 if(!$fp){
 	echo '该文件已被删除';
 	exit;
 }
 header("Content-type:application/octet-stream ");
 header("Accept-Ranges:bytes");
 header( "Accept-Length: " .filesize($path));
 header( "Content-Disposition:   attachment;   filename= {$filename}"); 
 $content=fread($fp,filesize($path));
 echo $content;
}
else {
	echo '该文件不存在';
}