<?php
// echo 'hogehoge';
if($_POST) {
//   echo $_POST['num_nasu'] . '<br>';
//   echo $_POST['num_tomato'] . '<br>';
//   echo $_POST['num_cucumber'] . '<br>';
//   echo $_POST['total'];
echo "ご購入ありがとうございました";
} else {
  echo "HTMLからのPOST送信受信に失敗しました";
}

$array = ["num_nasu","num_tomato","num_cucumber","total"];
foreach($array as $value) {
    file_put_contents("../data/data20241108a.txt", "$value=".$_POST[$value],FILE_APPEND);
    file_put_contents("../data/data20241108a.txt", "\n",FILE_APPEND);
}
?>