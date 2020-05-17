<?php

namespace SSYT\Support;

class PageContent {
    public static function view($method) {
        $rootPath = $_SERVER['DOCUMENT_ROOT'];
        if($_SERVER['REQUEST_METHOD'] == "GET") {
            if(is_string($method)) return include $rootPath . '/view/' . $method . '.php';
        }
    }
}