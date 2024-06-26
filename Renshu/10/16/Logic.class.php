<?php
class Logic {
    
    public $data;
    public $request;
    public $session;
    public $view;
    public $auth;
    public $error_message;
    public $validation;
    
    function __construct() {}
    
    //一番最初はactionにはloginなどが入っている
    function execute($action) {
        $this->session->start();
        $this->getSessionParameters();//どんな処理？

        //ログインボタン押す度に$messageの配列の中身を空にする
        if (isset($this->error_message->message)){
            $this->error_message->message = [];
        }
        
        //ログインせずにログイン後のページに行こうとした場合
        if (!$this->is_authenticated() && $action != "auth") {
            $action = "login";
            $this->request->setAction("login");
        }
        switch($action) {
            case "login":
            case "top":
            case "about":
            case "links":
                break;
            case "logout":
                $this->session->close();
                $this->request->setAction("login");
                break;
            case "auth":
                $this->getPostParameters();
                $this->setDataToSession();
                //validationチェック
                if (!($this->validation->inputCheck($this->data->id,$this->data->password))){
                    $this->request->setAction("login");//loginページのまま
                    break;//inputCheckで引っかかればswitchの処理は終了する
                };
                if ($this->authenticate()) {//id,passwordのチェック
                    $this->request->setAction("top");//actionをtopに変更
                } else {
                    $this->error_message->setError("auth");//エラーメッセージをset
                    $this->request->setAction("login");//loginページのまま
                }
                break;
            default:
                $action = "error";
                $this->request->setAction("error");
                break;
        }
        $this->view->setBaseTemplate("work16-base-template.php");
        $this->view->render($this->data, $this->error_message);//第二引数として追加する$error_message
    }
    //どんな処理？ここのdataは何が入っている？
    function getSessionParameters() {
        $vars = array_keys(get_object_vars($this->data));
        foreach ($vars as $var) {
            $this->data->$var = $this->session->getParameter($var);
        }
    }
    //どんな処理？
    function getPostParameters() {
        $vars = array_keys(get_object_vars($this->data));
        foreach ($vars as $var) {
            $this->data->$var = $this->request->getParameter($var);
        }
    }
    function setDataToSession() {    	
        $vars = array_keys(get_object_vars($this->data));
        foreach ($vars as $var) {
            $this->session->setParameter($var,$this->data->$var);
        }
    }
    function is_authenticated() {
        if ($this->data->is_authenticated) {
            return true;
        }
        return false;
    }
    function authenticate() {
        //viewクラスでチェック
        if ($this->auth->authenticate($this->data->id,$this->data->password)) {
            $this->data->is_authenticated = true;
            $this->session->setParameter("is_authenticated",true);
            return true;
        }
        return false;
    }
    function setData($data) {
        $this->data = $data;
    }
    function setRequest($request) {
        $this->request = $request;
    }
    function setSession($session) {
        $this->session = $session;
    }
    function setView($view) {
        $this->view = $view;
    }
    function setAuth($auth) {
        $this->auth = $auth;
    }
    function setErrorMessage($error_message) {
        $this->error_message = $error_message;
    }
    function setValidation($validation) {
        $this->validation = $validation;
    }
}
?>
