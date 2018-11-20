@extends('layouts.app')
@section('content')

<h2>登録情報詳細</h2>

<p>受付時間 : {{ $inquiry[0]->create_time }}</p>
<p>受付担当 : {{ $data['user'] }}</p>
<p>顧客氏名 : {{ $data['contractor'] }}</p>
<p>電話番号 : {{ $inquiry[0]->tel }}</p>
<p>荷電者名 : {{ $inquiry[0]->income }}</p>
<p>顧客関係 : {{ $inquiry[0]->relation }}</p>
<p>荷電概要 : {{ $inquiry[0]->overview }}</p>
<p>販売店名 : {{ $inquiry[0]->sales }}</p>
<p>代理店名 : {{ $inquiry[0]->agency }}</p>
<p>受付内容 : {{ $inquiry[0]->contents }}</p>
<p>対応内容 : {{ $inquiry[0]->response }}</p>
<p>作業内容 : {{ $inquiry[0]->work }}</p>
<p>宛先希望 : {{ $inquiry[0]->contact }}</p>
<p>宛先番号 : {{ $inquiry[0]->contact_n }}</p>
<p>時間指定 : {{ $inquiry[0]->call_time }}</p>
<a href="{{ action('InquiryController@edit', $inquiry[0]->id) }}">変更ページ</a>

@endsection
