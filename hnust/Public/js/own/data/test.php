<?php
 $fp=fopen("px.txt","w+");
   $s="<div class=\"rmqd\">
        <span>热门球队</span>
         <ul class=\"tjteam cf\"></ul>
        </div>";
 // $s='<div class="rmqd"><span>热门球队</span><ul class="tjteam cf"></ul></div>';
 $pat='/<div\sclass=\"rmqd\">(.+?)<\/div>/s';
 // $data=array();
 preg_match($pat,$s,$data);
 echo $data[0];
 print_r($data);
 fwrite($fp,$data[1]);
?>