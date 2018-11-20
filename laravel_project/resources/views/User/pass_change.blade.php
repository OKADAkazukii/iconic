@extends('layouts.app')

@section('content')
<script type="text/javascript">
    function test(text){
        /* 入力値 */
        var str=text.value;
        /* 数値以外の文字列が含まれていた場合 */
        if(str.match(/[^0-9]/g)){
            /* アラート表示 */
            alert (str.match(/[^0-9]/g)+'\n年齢は半角数値で入力して下さい');
            /* テキストボックスを空にする */
            text.value="";
            return false;
        }
    }
</script>
<form action="#">
    年齢：<input type="text" value="" onblur="test(this)" size="3" maxlength="3" /> 歳<br>
    ※半角数値以外を入力するとフォーカスが外れた時にアラートが表示されます。
</form>
@endsection

