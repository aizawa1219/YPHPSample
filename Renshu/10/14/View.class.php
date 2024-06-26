<?php
class View {
    // work14-base-template.phpのファイル名
    public $base_template_filename;
    // 表示するためのHTMLを格納する変数
    public $content;
    
    function __construct() {}

    // ベーステンプレートファイルを指定する
    function setBaseTemplate($filename) {
        $this->base_template_filename = $filename;
    }

    // 　ロジックで呼ばれるメソッド。表示するHTMLをメンバ変数$this->contentに代入する
    function render($data) {
        ob_start();
        ob_implicit_flush(0);
        require_once($this->base_template_filename);
        $content = ob_get_clean();
        $this->content = $content;
    }
    // メンバ変数$this->contentを表示する 
    function show() {
        print $this->content;
    }
}


