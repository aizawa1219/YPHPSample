<?php

class Validation{

    public $error_message;

    function inputCheck($id, $password){
        echo "<pre>";
        var_dump($password);
        if ($id === ""){
            $this->error_message->setError("id");
        }
        if ($password === ""){
            $this->error_message->setError("password_null");
        }
        else if (strpos($password, "e") || !(is_numeric($password)) ){//数値であるかどうか
            $this->error_message->setError("password");
        }

        //全てのチェック項目を通過するようにしている
        if ($this->error_message->message !== []){
            return false;
        }
        
        return true;
    }

    //errormessageオブジェクトを使えるようにしている
    function setErrorMessage($error_message) {
        $this->error_message = $error_message;
    }

}

?>