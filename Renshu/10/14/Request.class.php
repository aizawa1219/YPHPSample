<?php
class Request {    
    // $_POSTの値がすべてコピーされる
    private $post;
    
    // コンストラクタで$_POSTの値をすべてメンバ変数$this->postに代入する
    function __construct(){
        if (!empty($_POST)) {
            $this->post = $_POST;
        } else {
            $this->post = array();
        }
    }
    // POSTパラメータをもどす
    function getParameter($key) {
        if (isset($this->post[$key])) {
            return $this->post[$key];
        }
    }
    // アクション名を戻す（デフォルトアクションは「form」）
    //3
    function getAction(){
        $action = "form";
        if (!empty($this->post) && isset($this->post["action"])) {
            $action = $this->post["action"];
        }
        return $action;
    }
}

