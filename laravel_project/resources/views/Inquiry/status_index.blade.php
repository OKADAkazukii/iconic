@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <h4 class="card-header">未対応</h4>
                @foreach($support[0] as $supo)
                    <div>{{$supo->create_time}}</div>
                    <div>{{$supo->income}}</div>
                    <div>{{$supo->overview}}</div>
                    <div style="margin-bottom:10px;">
                        <a href="{{ action('InquiryController@show', $supo->id) }}">情報詳細へ</a>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <h4 class="card-header">対応中 速報報告書未送信</h4>
                @foreach($support[1] as $supo)
                    <div>{{$supo->create_time}}</div>
                    <div>{{$supo->income}}</div>
                    <div>{{$supo->overview}}</div>
                    <div style="margin-bottom:10px;">
                        <a href="{{ action('InquiryController@show', $supo->id) }}">情報詳細へ</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<br>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <h4 class="card-header">対応中 速報報告書送信済み</h4>
                @foreach($support[2] as $supo)
                    <div>{{$supo->create_time}}</div>
                    <div>{{$supo->income}}</div>
                    <div>{{$supo->overview}}</div>
                    <div style="margin-bottom:10px;">
                        <a href="{{ action('InquiryController@show', $supo->id) }}">情報詳細へ</a>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <h4 class="card-header">対応済 完了報告書未送信</h4>
                @foreach($support[3] as $supo)
                    <div>{{$supo->create_time}}</div>
                    <div>{{$supo->income}}</div>
                    <div>{{$supo->overview}}</div>
                    <div style="margin-bottom:10px;">
                        <a href="{{ action('InquiryController@show', $supo->id) }}">情報詳細へ</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<br>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <h4 class="card-header">対応完了</h4>
                @foreach($support[4] as $supo)
                    <div>{{$supo->create_time}}</div>
                    <div>{{$supo->income}}</div>
                    <div>{{$supo->overview}}</div>
                    <div style="margin-bottom:10px;">
                        <a href="{{ action('InquiryController@show', $supo->id) }}">情報詳細へ</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
