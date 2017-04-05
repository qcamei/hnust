<?php
$shopdata=array(
  array(array('value'=>335,'name'=>'惊'),array('value'=>310,'name'=>'哀'),array('value'=>234,'name'=>'惧'),array('value'=>135,'name'=>'恶'),array('value'=>1548,'name'=>'怒'),array('value'=>1548,'name'=>'好'),array('value'=>1548,'name'=>'乐')),
  array(array('value'=>258,'name'=>'惊'),array('value'=>400,'name'=>'哀'),array('value'=>115,'name'=>'惧'),array('value'=>156,'name'=>'恶'),array('value'=>850,'name'=>'怒'),array('value'=>1548,'name'=>'好'),array('value'=>1548,'name'=>'乐')),
  array(array('value'=>420,'name'=>'惊'),array('value'=>120,'name'=>'哀'),array('value'=>320,'name'=>'惧'),array('value'=>960,'name'=>'恶'),array('value'=>180,'name'=>'怒'),array('value'=>1548,'name'=>'好'),array('value'=>1548,'name'=>'乐'))
  );
$tbdata=array(
  array(array('value'=>335,'name'=>'惊'),array('value'=>310,'name'=>'哀'),array('value'=>234,'name'=>'惧'),array('value'=>135,'name'=>'恶'),array('value'=>1548,'name'=>'怒'),array('value'=>1548,'name'=>'好'),array('value'=>1548,'name'=>'乐')),
  array(array('value'=>258,'name'=>'惊'),array('value'=>400,'name'=>'哀'),array('value'=>115,'name'=>'惧'),array('value'=>156,'name'=>'恶'),array('value'=>850,'name'=>'怒'),array('value'=>1548,'name'=>'好'),array('value'=>1548,'name'=>'乐')),
  array(array('value'=>420,'name'=>'惊'),array('value'=>120,'name'=>'哀'),array('value'=>320,'name'=>'惧'),array('value'=>960,'name'=>'恶'),array('value'=>180,'name'=>'怒'),array('value'=>1548,'name'=>'好'),array('value'=>1548,'name'=>'乐'))
  );
 $ciyun=array(10,20,30,20,50,60,100);
 $onsale=array(20,30,50,80,120,12,62);
 $star=array(20,30,50,80,120,253,651);


 $mn=array(
      array('新养道','特仑苏','真果粒'),
      array('新养道'=>array(
          $shopdata,$tbdata,$ciyun,$onsale,$star
        ),
      '特仑苏'=>array(
           $shopdata,$tbdata,$ciyun,$onsale,$star
        ),
       '真果粒'=>array(
           $shopdata,$tbdata,$ciyun,$onsale,$star
        ),
      )
    );


 $yl=array(
      array('谷粒多','安幕希','金典'),
      array('谷粒多'=>array(
          $shopdata,$tbdata,$ciyun,$onsale,$star
        ),
      '安幕希'=>array(
           $shopdata,$tbdata,$ciyun,$onsale,$star
        ),
       '金典'=>array(
           $shopdata,$tbdata,$ciyun,$onsale,$star
        ),
      )
    );
?>