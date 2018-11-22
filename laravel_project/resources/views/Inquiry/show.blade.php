@extends('layouts.app')
@section('content')


<h2 style="margin-left:15%;">登録情報詳細</h2><br>
<div class="container">
    @if($inquiry[0]->status==0)
        <div style="background-color:red;height:30px;margin-bottom:10px;"><h4 style="color:white;font-weight:bold;">未対応</h4></div>
    @elseif($inquiry[0]->status==1)
        <div style="background-color:#FF4500;height:30px;margin-bottom:10px;"><h4 style="color:white;font-weight:bold;">対応中 速報報告書未送信</h4></div>
    @elseif($inquiry[0]->status==2)
        <div style="background-color:#228B22;height:30px;margin-bottom:10px;"><h4 style="color:white;font-weight:bold;">対応中 速報報告書送信済み</h4></div>
    @elseif($inquiry[0]->status==3)
        <div style="background-color:#6927FF;height:30px;margin-bottom:10px;"><h4 style="color:white;font-weight:bold;">対応済み 完了報告書未送信</h4></div>
    @elseif($inquiry[0]->status==4)
        <div style="background-color:#005FFF;height:30px;margin-bottom:10px;"><h4 style="color:white;font-weight:bold;">対応完了</h4></div>
    @endif
    <div class="row">
        <div class="col-md-7">
            <div class="card">
                <h4 class="card-header" style="font-weight:bold;">入電情報</h4>
                <p>受付時間 : {{ $inquiry[0]->create_time }}</p>
                <p>受付担当 : {{ $data['user'] }}</p>
                <p>荷電者名 : {{ $inquiry[0]->income }}</p>
                <p>顧客関係 : {{ $inquiry[0]->relation }}</p>
                <p>電話番号 : {{ $inquiry[0]->tel }}</p>
                <p>電話番号2 : {{ $inquiry[0]->tel2 }}</p>
                <p>荷電概要 : {{ $inquiry[0]->overview }}</p>
                <p>販売店名 : {{ $inquiry[0]->sales }}</p>
                <p>代理店名 : {{ $inquiry[0]->agency }}</p>
                <p>宛先希望 : {{ $inquiry[0]->contact }}</p>
                <p>宛先番号 : {{ $inquiry[0]->contact_n }}</p>
                <p>時間指定 : {{ $inquiry[0]->call_time }}</p>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card">
                <h4 class="card-header" style="font-weight:bold;">契約者情報</h4>
                <p>顧客氏名 : {{ $data['contractor_name'] }}</p>
                <p>契約開始 : {{ $data['contractor_service'] }}</p>
                <p>郵便番号 : {{ $data['contractor_postal'] }}</p>
                <p>登録住所 : {{ $data['contractor_address'] }}</p>
            </div>

            <br>
            <a style="font-size:18px;" href="{{ action('InquiryController@edit', $inquiry[0]->id) }}">入電情報を変更する</a>
            <br><br>
            @if($inquiry[0]->status==1 || $inquiry[0]->status==2)
            <form action="/home/inquiry/status_change" method="post">
            {{ csrf_field() }}
                <input type="hidden" name="id" value="{{$inquiry[0]->id}}">
                <select name="status">
                    <option value=1>速報報告書 未送信</option>
                    <option value=2>速報報告書 送信済み</option>
                </select>
                <button type="submit" class="btn btn-primary btn-sm" style="margin-left:7px;">変更</button>
            </form>
            @endif
            @if($inquiry[0]->status==3 || $inquiry[0]->status==4)
            <form action="/home/inquiry/status_change" method="post">
            {{ csrf_field() }}
                <input type="hidden" name="id" value="{{$inquiry[0]->id}}">
                <select name="status">
                    <option value=3>完了報告書 未送信</option>
                    <option value=4>完了報告書 送信済み</option>
                </select>
                <button type="submit" class="btn btn-primary btn-sm" style="margin-left:7px;">変更</button>
            </form>
            @endif

            <br><br>
            <div class="card">
            <div style="font-weight:bold;">ページの移動</div>
                <div class="container">
                    <a href="/home/inquiry">登録情報一覧</a>
                    <br>
                    <a href="/home/status">進捗管理一覧</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12" style="margin-top:20px;">
            <div class="card">
                <h4 class="card-header" style="font-weight:bold;">受付内容</h4>
                <p>{{ $inquiry[0]->contents }}</p>
            </div>
        </div>
        <div class="col-md-12" style="margin-top:20px;">
            <div class="card">
                <h4 class="card-header" style="font-weight:bold;">対応内容</h4>
                <p>{{ $inquiry[0]->response }}</p>
            </div>
        </div>
        <div class="col-md-12" style="margin-top:20px;">
            <div class="card">
                <h4 class="card-header" style="font-weight:bold;">作業内容</h4>
                <p>{{ $inquiry[0]->work }}</p>
            </div>
        </div>


@endsection
