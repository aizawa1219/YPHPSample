<?php

class ErrorMessage{

    public $message = [];

     //エラーの判断
     function is_error($key){
        if (!(empty($this->message[$key]))){
            return true;
        }
     }

    //エラーメッセージを返す
    function getErrorMessage($error){
        if ($error == "id"){
            return $this->message[$error];
        }
        else if ($error == "password"){
            return $this->message[$error];
        }
        else if ($error == "password_null"){
            return $this->message[$error];
        }
        else if ($error == "auth"){
            return $this->message[$error];
        }
    }

    function setError($error) {
        if ($error == "id"){
            $this->message["id"] = "必須項目です";
        }
        else if ($error == "password"){
            $this->message["password"] = "数値を入力してください";
        }
        else if ($error == "password_null"){
            $this->message["password_null"] = "必須項目です";
        }
        else if ($error == "auth"){
            $this->message["auth"] = "IDとパスワードが間違っています";
        }
    }

   
}

?>