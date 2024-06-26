<?php
class Session {
    function __construct(){}
    
    // セッション開始処理
    function start() {
        session_start();
    }
    // セッション終了処理
    function close() {
        session_destroy();
        unset($_SESSION);
    }
    // セッションに情報を設定する
    function setParameter($key,$value) {
        $_SESSION[$key] = $value;
    }
    // セッション情報を取得する（値がない場合nullが戻す）
    function getParameter($key) {
        if (!empty($_SESSION) && isset($_SESSION[$key])) {
            return $_SESSION[$key];
        }
    }
    // セッション情報を削除する
    function deleteParameter($key) {
        if (!empty($_SESSION) && isset($_SESSION[$key])) {
            unset($_SESSION[$key]);
        }
    }
}

