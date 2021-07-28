<?php
namespace App\Helper;
class Helper{
    public static function escape($html){
        return htmlspecialchars($html, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8");
    }
}
