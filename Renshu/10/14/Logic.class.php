<?php
class Logic {
    public $data;        // データオブジェクト
    public $request;   // リクエストオブジェクト
    public $session;   // セッションオブジェクト
    public $view;        // ビューオブジェクト
    
    function __construct(){}

    // コントローラから呼ばれるメインの処理（引数としてアクション名が指定される）
    function execute($action) {
        $this->session->start();
        // 現在のセッション情報を読み込む
        $this->getSessionParameters();
        
        switch($action) {
            case "form":
                break;
            case "confirm":
                // 確認画面では$_POSTを読み込み、データオブジェクトに代入する
                $this->getPostParameters();
                // 確認画面ではデータオブジェクトの値をセッションに書き込む
                $this->setDataToSession();
                break;
            case "finish":
                // 完了画面ではセッション情報を破棄する
                $this->session->close();
                break;
            default:
                break;
        }
        $this->view->setBaseTemplate("work14-base-template.php");
        // アクションに応じた画面の表示
        $this->view->render($this->data);
    }
    // データオブジェクトのメンバー変数名に応じた値をセッションから読み込む
    function getSessionParameters() {
        $vars = array_keys(get_object_vars($this->data));
        foreach ($vars as $var) {
            $this->data->$var = $this->session->getParameter($var);
        }
    }
    //　データオブジェクトのメンバ変数名に応じた値をリクエスト値から読み込む
    function getPostParameters() {
        $vars = array_keys(get_object_vars($this->data));
        foreach ($vars as $var) {
            $this->data->$var = $this->request->getParameter($var);
        }
    }





    // データオブジェクトメンバ変数名に応じた値をセッションに書き込む
    function setDataToSession() {    	
        $vars = array_keys(get_object_vars($this->data));
        foreach ($vars as $var) {
            $this->session->setParameter($var,$this->data->$var);
        }
    }
    // ロジックに対応したデータオブジェクトを代入する（ワークファイルで呼ばれる）
    function setData($data) {
        $this->data = $data;
    }
    //　リクエストオブジェクトを代入する
    function setRequest($request) {
        $this->request = $request;
    }
    // セッションオブジェクトを代入する
    function setSession($session) {
        $this->session = $session;
    }
    // ビューオブジェクトを代入する
    function setView($view) {
        $this->view = $view;
    }
}
?>

