<?php 
include 'Db.php';
$db = new Db();

$w = $argv[1];
switch ($w) {
    case 'migrate':
       $q = $argv[2]; 
       if ($q == 'add') {
           echo $db->Migrate($q);
        }else if($q == 'drop'){
            echo $db->Migrate($q);
       }else{
           echo "not fout";
       }
    break;
       case 'server':
         system('php -S localhost:8000 -t public');
        break;
    default:
    echo "
    ===============================
            migration 
            server 
     ===============================
    "; 
       break;
}

