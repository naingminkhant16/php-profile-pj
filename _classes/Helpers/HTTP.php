<?php

namespace Helpers;

class HTTP
{
    static $basic="http://localhost:8080/php_profile_pj";

    static function redirect($path,$query=''){
        $url=static::$basic . $path;

        if($query)$url.="?$query";

        header("location: $url");
        exit();
    }
}
// example 
// HTTP::redirect("/_actions/populate.php",'');