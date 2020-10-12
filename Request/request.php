<?php

 $data=[];

 if(isset($_GET['action']))
 {
     $action=$_GET['action'];

     if($action=='Daftar')
     {
         $data[]=$_GET;
     }
 }

 header("Content-Type:application/json");
 header("Access-Control-Allow-Origin:*");

 
//  var_dump (json_encode($data));
 echo json_encode($data);


 ?>