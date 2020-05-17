<?php


namespace SSYT\Support;
use SSYT\Support\Database;

class PageSubmit extends Database
{
    public $dbh;

    public function get($action = "", $func)
    {
        if($_SERVER['REQUEST_METHOD'] == "POST" || $_SERVER['REQUEST_METHOD'] == "GET")
        {
            if(isset($_GET[$action])) {
                call_user_func($func);
            }
        }
    }

    public function post($data = [], $action) {
        if($_SERVER['REQUEST_METHOD'] == "POST")
            echo "Add Player data";
    }
}