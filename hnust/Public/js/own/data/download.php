<?php

function downfile($fileurl)
{
$filename=$fileurl;
$file   =   fopen($filename, "rb"); 
Header( "Content-type:   application/octet-stream "); 
Header( "Accept-Ranges:   bytes "); 
Header( "Content-Disposition:   attachment;   filename= my.xml");


$contents = "";
while (!feof($file)) {
  $contents .= fread($file, 8192);
}
echo $contents;
fclose($file);

}
$url="http://rss.sina.com.cn/tech/rollnews.xml";
downfile($url);

?>