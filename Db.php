<?php
class Db{ 
    public $host = 'localhost';
    public $user = 'root'; 
    public $pass = '';
    public $dbname = 'php_crud_api'; 

    public  function Connet(){    
        //  Connect Database mysql 
        $conn = new mysqli( $this->host, $this->user, $this->pass, $this->dbname);
         return $conn;
    } 
   public function Create(){
    //     Create Table 
        $sql = "CREATE TABLE product (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name_product VARCHAR(30) NOT NULL,
        price Int(30) NOT NULL
        )";
        $db =  $this->Connet();
        $w = $db->query($sql);
        return $w;
  }

public function Migrate($name){
      if($name == "add"){
        $cre = $this->Create();
        if ($cre == TRUE)  {
            return "sucess Create Table";
        }
        return "eror Create Table";
      }
      if($name == "drop"){
        //    Drop Table
            $dr =  $this->Connet();
          $dr->query("DROP TABLE product");
          return "sucess Drop Table";
      }
    
}
}



?> 