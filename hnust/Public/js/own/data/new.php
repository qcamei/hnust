<?php
$q=$_GET['q'];
$d=$_GET['data'];
if($q==-1){
   $url="http://v.juhe.cn/toutiao/index?type=".$d."&key=b6ca8c6350a85e941b80eb797c9f74ea";
$timeout=5;
$ch=curl_init($url);
curl_setopt ($ch, CURLOPT_HEADER,0);  
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);  
curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);  
$file_contents = curl_exec($ch);
curl_close($ch);
$data=json_decode($file_contents,true);
 // print_r($data);
 // $data.result;
 $result=$data["result"]["data"];
 // print_r($result);
$ret=array();
for($i=0;$i<count($result);$i++){
	$temp=array();
	$temp=array(
		"title"=>$result[$i]["title"],
		"imgsrc"=>$result[$i]["thumbnail_pic_s"],
		"newsurl"=>$result[$i]["url"]
		);
	$ret[]=$temp;
}
echo json_encode($ret);
}
?>