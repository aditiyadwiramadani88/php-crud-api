<?php
$server = $_SERVER['REQUEST_URI'];
$re  = substr($server, 1);
if($server == '/'):
   echo views::list();
   exit();
elseif (preg_match_all('/^[0-9]+$/', $re)):
         echo views::details($re);
else:
	echo "Page Not Fout";
endif;

