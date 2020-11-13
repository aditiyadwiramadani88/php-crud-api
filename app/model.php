<?php

class  model{
    public static function Sql(){ 
        $db = new Db();
        return $db->Connet();
    }
    public static function All(){ 
           $conn = self::Sql();
           $row = []; 
           $query = "SELECT * FROM product";
           $result = $conn->query($query);
            while($dt = $result->fetch_assoc()) {
               $row[] = $dt;
            }
            return json_encode($row);
    }
    public static function Create($data){ 
         $conn = self::Sql();
        $stmt = $conn->prepare("INSERT INTO product (name_product, price) VALUES (?, ?)");
        $stmt->bind_param("ss", $name_product, $price);
        $name_product = $data['name_product'];
        $price = $data["price"];
        $stmt->execute();
        return json_encode($data);
    }

   public   static function Detail($id) { 
       $conn = self::Sql();
           $conn = self::Sql();
           $row = []; 
           $query = "SELECT * FROM product WHERE id=$id";
           $result = $conn->query($query);
            while($dt = $result->fetch_assoc()) {
               $row[] = $dt;
            }
            return json_encode($row);
   }

   public static function Edit($id, $data){ 
       $conn = self::Sql();
        $stmt = $conn->prepare("UPDATE product SET name_product =?, price = ? WHERE id=?");
        $stmt->bind_param("sss",$data['name_product'], $data['price'], $id);
        $stmt->execute();
        return json_encode($data);
   }
   public static function Delete($id){
         $conn = self::Sql();
         $conn->query("DELETE FROM product WHERE id=$id");
         return json_encode(["msg"=> 'sucess delete']);
   }
}
