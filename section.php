<?php
require_once('omikuji.php');

$result = -1;
$err_msg = '';

if (isset($_POST["favorite-number"])) {
  if (is_numeric($_POST["favorite-number"])) {
    if (1 <= $_POST["favorite-number"] && $_POST["favorite-number"] < 50) {
      $result = floor($_POST["favorite-number"] / 10);
    } else {
      $err_msg = "数字は1以上50未満で入力してください";
    }
  } else {
    $err_msg = "数字で入力してください";
  }
}

?>
