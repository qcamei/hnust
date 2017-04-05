<?php
 $con= new sqlOpen("localhost","root","123456","infordb");
$con->connection();
class sqlOpen
{
         var $servername;
         var $username;
         var $password;
         var $dbname;
         var $conn;
        public function __construct($servername,$username,$password,$dbname){
                   $this->servername=$servername;
                    $this->username=$username;
                   $this->password=$password;
                   $this->dbname=$dbname;
         }
         function connection(){
            $this->conn= new mysqli($this->servername,$this->username,$this->password,$this->dbname);
         }
           

         function insert($title,$data){
             $sql="INSERT INTO comment VALUES (\"".$title."\",\"".$data."\");";
            $this->conn->query($sql);
         }

         function update($title){
               $sql="UPDATE good "." SET zan=zan+1"." WHERE title=\"".$title."\";";
              $this->conn->query($sql);
         }
         
         function search($title){
             $sql="select comment from comment where title=".$title.";";
             $result=$this->conn->query($sql);
             if($result->num_rows>0){
              return $result;
             }else return false;
         }
         function close(){
           $this->conn->close();
         }
}
?>