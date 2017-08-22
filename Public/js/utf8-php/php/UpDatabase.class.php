<?php
   class UpDatabase {
   	   public function __construct($servername,$username,$password,$database){
   	   	$this->servername=$servername;
	      $this->username=$username;
	      $this->password=$password;
	      $this->database=$database;
	      $this->conn=new mysqli($this->servername,$this->username,$this->password,$this->database);
   	   } 
   	   public function insert($filename,$link){
          $sql='insert into hnust_document (filename,link) values("'.$filename.'","'.$link.'");';
          $this->conn->query($sql);
   	   }
   }
?>