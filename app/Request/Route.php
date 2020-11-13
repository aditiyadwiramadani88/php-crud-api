<?php 
// namespace Request; 

// class Route{ 

// public static function server($method){
//     if($_SERVER["REQUEST_METHOD"] != $method){
//             echo json_encode(['msg' => "allow method $method"]);
//            exit();
//     }
//     return  $_SERVER['REQUEST_URI'];
// }
//     public  function get($url, $method){
//         $server = self::server("GET"); 
//         if(!$server){
//             echo $server;
//            exit();
//         }
//         if($server == $url){
//              echo $method;
//             exit();
//         }
//           echo json_encode(["msg" => 'page not fout']);
//        exit();
//     }

//     public  function post($url, $method){
//          $server = self::server("POST"); 
//         if(!$server){
//             echo $server;
//            exit();
//         }
//         if($server == $url){
//             echo $method();
//           exit();
//         }
//           echo json_encode(["msg" => 'page not fout']);
//        exit();
//     }

//     public  function delete($url, $method){ 
//         // check method
//          $server = self::server("DELETE"); 
//         if(!$server){
//             echo $server;
//            exit();
//         }
//         if($server == $url){
//             echo json_encode(["msg" => $method]);
//           exit();
//         }
//           echo json_encode(["msg" => 'page not fout']);
//        exit();
//     }

//     public  function put($url, $method){ 
//          $server = self::server("PUT"); 
//         if(!$server){
//             echo $server;
//            exit();
//         }
//         if($server == $url){
//             echo $method;
//           exit();
//         }
//         echo json_encode(["msg" => 'page not fout']);
//        exit();
//     }
// }