@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <h2 class="card-header">登録情報一覧</h2>
                <div style="margin-left:20px;">
                    @foreach($inquirys as $inquiry)
                        <div style="margin:25px 0 5px 0;">
                            <h5 style="font-weight:bold;">{{$inquiry->create_time}}</h5>
                            <div>電話番号 : {{$inquiry->tel}}</li>
                            <div>荷電者名 : {{$inquiry->income}}</li>
                            <div>荷電概要 : {{$inquiry->overview}}</li>
                            <a href="{{ action('InquiryController@show', $inquiry->id) }}">詳細ページ</a>
                        </div>
                    @endforeach
                </div>

                    <div style="position:relative; top:90px; left: 40%;">{{ $inquirys->links() }}</div>
            </div>
        </div>
    </div>
</div>
@endsection

