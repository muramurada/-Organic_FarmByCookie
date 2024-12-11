<?php
// echo 'hogehoge';
if($_POST) {
  echo $_POST['num_nasu'] . '<br>';
  echo $_POST['num_tomato'] . '<br>';
  echo $_POST['num_cucumber'] . '<br>';
  echo $_POST['total'];
} else {
  echo "HTMLからのPOST送信受信に失敗しました";
}
?>