<?php
class Session {
    function __construct() {}
    
    function start() {
        session_start();
    }
    function close() {
        session_destroy();
        unset($_SESSION);
    }
    //セッションに認証されたと記憶させる
    function setParameter($key,$value) {
        $_SESSION[$key] = $value;
    }
    function getParameter($key) {
        if (!empty($_SESSION) && isset($_SESSION[$key])) {
            return $_SESSION[$key];
        }
    }
    function deleteParameter($key) {
        if (!empty($_SESSION) && isset($_SESSION[$key])) {
            unset($_SESSION[$key]);
        }
    }
}
