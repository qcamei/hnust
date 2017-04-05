<?php

// header("Content-type: text/html; charset=utf-8");
//   $mycookic=tempnam('./temp', 'cookic');
 $file=fopen('contents.txt','w+');
 $fp=fopen('px.txt','w+');
  $url="http://sports.qq.com/";
  // $data="username=752068432%40qq.com&password=MBNeqLq9vxRA7Nf4ktfnJhr3RGnbh3EIDiBqSDznrxVJL1rzV37%2F7th8RUQXRvbbVCFjBCiKUqByK%2F9hM5cxNqXZ83eirgA6N8W7nxtZJXRSQ8tKcNckLqfWIFl%2BHyAOHEJqN1wUiJk%2FrShjZq%2FB%2FlnAy%2B7TjVnfBkbb%2FeCDlhE%3D&verify=&remember=1&pwencode=1&referer=http%3A%2F%2Fwww.imooc.com";
  $ch=curl_init($url);
  curl_setopt($ch, CURLOPT_HEADER,0);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  // date_default_timezone_get('prc');
  // curl_setopt($ch, CURLOPT_POSTFIELDS,data);
  // curl_setopt($ch, CURLOPT_COOKIEJAR,$mycookic);
  // curl_setopt($ch, CURLOPT_WRITEDATA,$file);
  // curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  // 	 application/x-www-form-urlen
  // 	))
  $result=curl_exec($ch);
   fwrite($file,$result);
  curl_close($ch);
  // $match='/<div class=\"content\" id=\"content\">'.'(.+?)'.'<div class=\"foot\">/i';
 // $result=file_get_contents('contents.txt');
  // $match='/<div\sclass=\"content\"\sid=\"content\">'.'(.|\s)*?/im';
 // $match='/(.+)/';
  // $match='/<div\sclass=\"foot\">/i';
  // preg_match($match,$result,$data);
  // print_r($data) ;
  //  fwrite($fp,$data[0]);
//   $url="http://www.imooc.com/u/1915633";
//   $ch=curl_init($url);
// curl_setopt($ch,CURLOPT_HEADER,0);
// curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
// curl_setopt($ch,CURLOPT_COOKIEFILE,$mycookic); //使用提交后得到的cookie数据做参数
// $contents=curl_exec($ch);
// curl_close($ch);
// echo $contents;
?>