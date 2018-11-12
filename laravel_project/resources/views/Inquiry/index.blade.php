@extends('layouts.app')
@section('content')

<h2>登録情報一覧（ページネーション未実装）</h2>

@foreach($inquirys as $inquiry)
    <ul>
        <li>受付時間 : {{$inquiry->create_time}}</li>
        <li>電話番号 : {{$inquiry->tel}}</li>
        <li>荷電者名 : {{$inquiry->income}}</li>
        <li>荷電概要 : {{$inquiry->overview}}</li>
        <a href="{{ action('InquiryController@show', $inquiry->id) }}">詳細ページ</a>
    </ul>
@endforeach

@endsection

