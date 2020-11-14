<?php 
use Request\Server;

class views{ 
    // Create Read
    public  static function list(){ 
        $server = new Server();
        if($server->Method("POST")){
           $price = $server->Form('price');
            $name_product = $server->Form('name_proudct');
            return model::Create(['name_product' => $name_product, 'price' => $price]);
        }
    return model::All();
    }
    // Edit Delete
    public static function details($id){
          $server = new Server();
        if($server->Method("POST")){
           $price = $server->Form('price');
            $name_product = $server->Form('name_proudct');
            return model::Edit($id,['name_product' => $name_product, 'price' => $price]);
        }else if($server->Method("DELETE")){
            return model::Delete($id);
        }
       return  model::Detail($id);
    }
}