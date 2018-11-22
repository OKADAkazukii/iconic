@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ダッシュボード</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    現在ログイン中です!
                </div>
            </div>
            <br>
            <a href="/home/add_form">入電情報を登録</a><br>
            <a href="/home/search">顧客検索</a><br>
            <a href="/home/inquiry">登録データ一覧</a><br>
            <a href="/home/status">進捗管理一覧</a><br>
            <a href="/home/pass_change">パスワード変更</a>

        </div>
    </div>
</div>
@endsection
