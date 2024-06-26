<?php
require_once("Session.class.php");
require_once("Request.class.php");
require_once("View.class.php");
require_once("Auth.class.php");
require_once("ErrorMessage.class.php");
require_once("Validation.class.php");

class Controller {
    
    public static $logic;
    public static $session;
    public static $request;
    public static $view;
    public static $auth;
    //変数を定義
    public static $error_message;
    public static $validation;
   // public static $validate;
    
    static function execute() {
        Controller::$session = new Session();//コンストラクタ無し
        Controller::$request = new Request();//actionの上書き.httpリクエストのチェックPOSTorGET.コンストラクタの実行
        Controller::$view    = new View();//コンストラクタ無し
        Controller::$auth    = new Auth();//コンストラクタ無し
        Controller::$error_message = new ErrorMessage();
        Controller::$validation    = new Validation();
        Controller::$logic->setSession(Controller::$session);
        Controller::$logic->setRequest(Controller::$request);
        Controller::$logic->setView(Controller::$view);
        Controller::$logic->setAuth(Controller::$auth);
        Controller::$logic->setErrorMessage(Controller::$error_message);
        Controller::$logic->setValidation(Controller::$validation);
        Controller::$validation->setErrorMessage(Controller::$error_message);//validationクラスでerrormessageオブジェクトを使えるようにしている
        Controller::$logic->execute(Controller::$request->getAction());//actionをexecuteするgetAction(actionが返る.最初はloginなど)
        Controller::$view->show();
    }
    static function getTemplateName() {
        $action = Controller::$request->getAction();//現在のactionを取得
        $template_name = "work16-" . $action . ".php";
        return $template_name;
    }
    static function setLogic($logic) {
        Controller::$logic = $logic;//new Logic()
    }
    // static function setValidation($validate) {
    //     Controller::$validate = $validate;//new Vlidation()
    // }
}
?>

