<?php
$ua = $_SERVER['HTTP_USER_AGENT'];// ユーザエージェントを取得
if(isSmartPhone($ua)) {
  require_once('./mobile/index.php');
}else{
  require_once('./pc/index.php');
}
function isSmartPhone($ua) {
  if((strpos($ua, 'iPhone') !== false) || (strpos($ua, 'iPod') !== false) ||(strpos($ua, 'Android') !== false)) return true;
  return false;
}?>
