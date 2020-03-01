<?php


class Alert{

    public static function danger($msg){
        return self::render($msg,"alert-danger");
    }

    public static function success($msg){
        return self::render($msg,"alert-success");
    }

    public static function info($msg){
        return self::render($msg,"alert-info");
    }

    private static function render($msg,$type){
        //return '<div class="alert '.$type.'" role="alert">'.$msg.'</div>';
        return $msg;
    }

    public static function errorList($errors){
        $html = "<ul style='list-style:none;padding:0' class='text-danger'>";
        foreach($errors as $msg){
            $html.= "<li>$msg</li>";

        }
        return self::danger($html."</ul>");
    }
}

function methodFilter($type){
    if (strtolower($_SERVER['REQUEST_METHOD']) !== strtolower($type)) {
        echo "not allowed";
        http_response_code(405);
        die();
    }
}

function redirect($url, $statusCode = 303)
{
   header('Location: ' . $url, true, $statusCode);
   die();
}