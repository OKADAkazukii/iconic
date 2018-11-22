@extends('layouts.app')

@section('content')

<form action="/home/add_form/add" method="post">
{{ csrf_field() }}
    <p>名前 : {{$post_data['name']}}</p>
        <input type="hidden" name="name" value="{{$post_data['name']}}">

    <p>サービス開始日 : {{$post_data['service_s']}}</p>
        <input type="hidden" name="service_s" value="{{$post_data['service_s']}}">

    <p>郵便番号 : {{$post_data['postal']}}</p>
        <input type="hidden" name="postal" value="{{$post_data['postal']}}">

    <p>住所 : {{$post_data['address']}}</p>
        <input type="hidden" name="address" value="{{$post_data['address']}}">

    <p>部屋番号 : {{$post_data['room_number']}}</p>
        <input type="hidden" name="room_number" value="{{$post_data['room_number']}}">

    <p>電話番号 : {{$post_data['tel']}}</p>
        <input type="hidden" name="tel" value="{{$post_data['tel']}}">

    <p>電話番号2 : {{$post_data['tel2']}}</p>
        <input type="hidden" name="tel2" value="{{$post_data['tel2']}}">

    <p>登録日時 : {{$post_data['create_time']}}</p>
        <input type="hidden" name="create_time" value="{{$post_data['create_time']}}">

    <p>代理店名 : {{$post_data['agency']}}</p>
        <input type="hidden" name="agency" value="{{$post_data['agency']}}">

    <p>販売店名 : {{$post_data['sales']}}</p>
        <input type="hidden" name="sales" value="{{$post_data['sales']}}">

    <p>入電者 : {{$post_data['income']}}</p>
        <input type="hidden" name="income" value="{{$post_data['income']}}">

    <p>入電者の関係 : {{$post_data['relation']}}</p>
        <input type="hidden" name="relation" value="{{$post_data['relation']}}">

    <p>入電の概要 : {{$post_data['overview']}}</p>
        <input type="hidden" name="overview" value="{{$post_data['overview']}}">

    <p>受付内容 : {{$post_data['contents']}}</p>
        <input type="hidden" name="contents" value="{{$post_data['contents']}}">

    <p>対応内容 : {{$post_data['response']}}</p>
        <input type="hidden" name="response" value="{{$post_data['response']}}">

    <p>連絡希望者 : {{$post_data['contact']}}</p>
        <input type="hidden" name="contact" value="{{$post_data['contact']}}">

    <p>連絡先 : {{$post_data['contact_n']}}</p>
        <input type="hidden" name="contact_n" value="{{$post_data['contact_n']}}">

    <p>時間指定 : {{$post_data['call_time']}}</p>
        <input type="hidden" name="call_time" value="{{$post_data['call_time']}}">

    <input type="submit" value="上記内容で送信する">
<form>

@endsection
