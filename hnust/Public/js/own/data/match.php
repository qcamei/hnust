<?php
   $fp=fopen("px.txt","w+");
$result=file_get_contents("contents.txt");
// $match='/.+/i';
$match='/<div\sclass=\"page\sl32\">(.+?)<div\sclass=\"gg-1000x90\"\sstyle=\"padding-bottom:0;\">/m';
 // $data=array();
$res=preg_match_all($match,$result,$data);
// echo $res;
fwrite($fp,$data[1]);
print_r($data);
?>