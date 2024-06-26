<?php
class Request {
    
    private $data;//logicクラスの$dataとは違う
    private $action;
    private $default_action = "login";
    
    function __construct() {
        //HTTPリクエストメソッドを判別する.これは何を見ているのか?
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (!empty($_POST)) {
                $this->data = $_POST;
            } else {
                $this->data = array();
            }
        } else {
            if (!empty($_GET)) {
                $this->data = $_GET;
            } else {
                $this->data = array();
            }        
        }
        $this->setDefaultAction();//コンストラクタの中身最後に実行
    }
    function getParameter($key) {
        if (isset($this->data[$key])) {
            return $this->data[$key];
        }
    }
    function setDefaultAction() {
        $this->action = $this->default_action;//$actionをloginに設定
        if (!empty($this->data) && isset($this->data["action"])) { //フォーム送信された場合actionのvalueが入っている
            $this->action = $this->data["action"];//$actionを上書き.auth,top,aboutなど
        }
    }
    function setAction($action) {
        $this->action = $action;
    }
    function getAction() {
        return $this->action;
    }
}
?>

