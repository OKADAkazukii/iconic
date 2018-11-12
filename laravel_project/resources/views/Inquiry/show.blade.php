@extends('layouts.app')
@section('content')

<h2>登録情報詳細（変更機能未実装）</h2>

@foreach($inquiry as $show)
<p>受付時間 : {{ $show->create_time }}</p>
<p>受付担当 : {{ $show->user_id }}←後でユーザー名取得</p>
<p>顧客氏名 : {{ $show->contractor_id }}←名前だけでなく情報も取得</p>
<p>電話番号 : {{ $show->tel }}</p>
<p>荷電者名 : {{ $show->income }}</p>
<p>顧客関係 : {{ $show->relation }}</p>
<p>荷電概要 : {{ $show->overview }}</p>
<p>販売店名 : {{ $show->sales }}</p>
<p>代理店名 : {{ $show->agency }}</p>
<p>受付内容 : {{ $show->contents }}</p>
<p>対応内容 : {{ $show->response }}</p>
<p>作業内容 : {{ $show->work }}</p>
<p>宛先希望 : {{ $show->contact }}</p>
<p>宛先番号 : {{ $show->contact_n }}</p>
<p>時間指定 : {{ $show->call_time }}</p>
@endforeach

@endsection
