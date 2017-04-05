<?php
 include 'data.php';
 $q=$_GET['q'];
 if($q=='m')
 		echo json_encode($mn);
 else echo  json_encode($yl);
?>