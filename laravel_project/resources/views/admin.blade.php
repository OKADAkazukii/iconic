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

                    管理者としてログイン中です!
                </div>
            </div>
            <br>
            <a class="nav-link" href="{{ route('register') }}">ユーザー登録</a>
            <br>
            <a class="nav-link" href="/user_index">ユーザー情報一覧</a>
            <br>
            <div>user復活</div>
            <br>
            <div>user停止</div>
        </div>
    </div>
</div>
@endsection
