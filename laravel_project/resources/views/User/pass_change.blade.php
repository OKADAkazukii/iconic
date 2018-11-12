@extends('layouts.app')

@section('content')
<?php
//ログイン判定↓
if(Auth::check()){
//ログイン中のユーザー取得 ＋ $l_userに格納↓
  $l_user = \Auth::user();
//配列の表示
  echo "こんにちは! " . $l_user->name . "さん";
}

echo "<br><br>*ユーザー一覧*";
echo '<br>'.$test;
echo '<br>'.$users."件の該当あり";



?>
@endsection


