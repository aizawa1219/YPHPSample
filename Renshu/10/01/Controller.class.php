<?php
class Controller {
  //3番目//8番目
  static function getAction() {
    if (empty ( $_POST )) {
      $action = "form";
    } else if (isset ( $_POST ["action"] )) {
      $action = $_POST ["action"];
    }
    return $action;
  }
  //2番目//7番目
  static function getTemplateName() {
    $action = Controller::getAction ();
    $template_name = "work10-" . $action . ".php";
    return $template_name;
  }
}
?>
