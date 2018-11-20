@extends('layouts.app')

@section('content')
<?php

    foreach($users as $user){

        echo '<br><br>';

        echo "ユーザーID ：{$user->id}";
        echo '<br>';

        echo "ユーザー名 ：{$user->name}";
        echo '<br>';

        echo "eメール ：{$user->email} ←最終的に消す";
        echo '<br>';

        echo "使用中 とかフラグ管理しているステータス";
    }
?>
@endsection
