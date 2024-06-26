<?php
class View {    
    public $base_template_filename;
    public $content;
    
    function __construct() {}
    
    function setBaseTemplate($filename) {
        $this->base_template_filename = $filename;//ファイル名をセット.初期値work16-base-template.php
    }
    //logicファイルから$error_messageをrenderの引数に入れて持ってくる
    function render($data, $error_message) {
        ob_start();
        ob_implicit_flush(0);
        echo "<pre>";
        var_dump($error_message);
        require_once($this->base_template_filename);//ここにhtmlファイルも入るイメージ
        $content = ob_get_clean();//ob_start()とob_get_clean()に囲まれた内容が入る.つまりファイル名
        $this->content = $content;//$contentにファイルがセット？
    }
    function show() {
        print $this->content; //上記のファイルを表示.初めはwork16-base-template.phpが入る
    }
}
