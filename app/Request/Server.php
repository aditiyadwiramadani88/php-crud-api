<?php
namespace Request;
class Server  {
    public function Method($name){
         if($_SERVER["REQUEST_METHOD"] == $name){ 
             return true;
         }
         return false;
    }
    public function Form($name){
        $form  =$_REQUEST[$name];
        if(empty($form)){ 
            echo "$name is required"; 
            return false;
        }
    return $form;
    }
    
}
