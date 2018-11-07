<?php
if(Auth::check()){
  $l_user = \Auth::user();
  echo "こんにちは! " . $l_user->name . "さん";
}
?>

