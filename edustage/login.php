<?php
define("TYPE_CAPSULE","personal");

require_once __DIR__."/lib/BardLib.php";

if(isLogedIn()){
    redirect("admin.php");
}else{
    $data = $_POST;

    if(!isset($data['email']) || !isset($data['password'])){
        setFlash("message",[
            "title"=>"Oops!",
            "icon"=>"error",
            "html"=>"password/email belum diinput!"
        ]);
        redirect("admin.php");
    }else{
        if($data['email'] === EMAIL_CS && $data['password'] === PASSWORD_CS){
            setAccount($data['email'],$data['password']);
            redirect("admin.php");
        }else{
            setFlash("message",[
                "title"=>"Oops!",
                "icon"=>"error",
                "html"=>"password/email salah!"
            ]);

            redirect("admin.php");
            
        }
    }
}

?>