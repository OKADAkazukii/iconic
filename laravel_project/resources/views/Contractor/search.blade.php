@extends('layouts.app')

@section('content')
<html>
    <head>
        <meta charset="utf-8">
        <title>顧客検索フォーム</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h3>顧客検索フォーム</h3>
                    <br><br>
                    <form action="/home/test" method="post" >
                    {!! csrf_field() !!}
                        <li>
                            <dt>電話番号</dt>
                        </li>
                        <input type="char" name="tel" value="">
                        <br><br>
                        <input type="submit" value="検索開始"/> 
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
@endsection
