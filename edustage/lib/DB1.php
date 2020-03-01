<?php

use Illuminate\Database\Capsule\Manager as Capsule;



$capsule = new Capsule;



$database_name = "bima_personal";


if(defined("TYPE_CAPSULE")){
   if(TYPE_CAPSULE == "dplk"){
      $database_name = "dplk";
   }else if(TYPE_CAPSULE == "personal"){
      $database_name = "bima_personal";
   }
}else{
   
}

$capsule->addConnection([
   "driver" => "mysql",
   "host" =>"127.0.0.1",
   "database" => $database_name,
   "username" => "root",
   "password" => ""
]);

$capsule->setAsGlobal();

$capsule->bootEloquent();
