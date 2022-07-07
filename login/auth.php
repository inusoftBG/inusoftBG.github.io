<?php
if($account == "lord" && $password == "pass"){
 echo "歡迎 $_POST[account], 你的密碼是 $_POST[password]";
}elseif($_POST[account] == "god" && $_POST[password] == "dog"){
 $y = date("Y") - 1911;
 $m = date("m");
 $d = date("d");
 echo "歡迎 $_POST[account], 今天是民國".$y."年".$m."月".$d."日";
}else{
 echo "登入失敗:<hr> 輸入的資料:<br>帳號: $_POST[account] <br>密碼: $_POST[password]";
}
?>