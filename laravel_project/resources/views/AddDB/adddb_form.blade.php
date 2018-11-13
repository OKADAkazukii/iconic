<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script>
$(function (){
    $.getJSON("/json",function(data){
        if(data[0].id == 1){
            $("input[name='id']").val(data[0].id);
            $("input[name='name']").val(data[0].name);
            $("input[name='service_s']").val(data[0].service_s);
            $("input[name='postal']").val(data[0].postal);
            $("input[name='address']").val(data[0].address);
            $("input[name='address2']").val(data[0].s_address);
            $("input[name='room_number']").val(data[0].room_number);

            $("#test").show();
            $("#contractor").hide();
        }else{
            $("#test").hide();
            $("#contractor").show();
        }
        $("#inquery").show();
    });
})
</script>
</head>
<body>
<div class="container">
    <h2>新規入電情報登録フォーム</h2>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="container">
                @if ($errors->any())
                    <div class="errors">
                        <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                    </div>
                 @endif
            <br>

            <form action="/home/add_form" method="post" enctype="multipart/form-data">
               {{ csrf_field() }}
              <div class="row">
                  <div class="col-sm-3">電話番号</div>
                  <div class="col-sm-9 form-inline" style="padding: 3px;">
                      <input class="form-control input-sm" name="tel" placeholder="00-0000-0000" size="20" type="tel" value="{{old('tel')}}">
                  </div>
              </div>
<br>
<div id="test">既存契約者が検索されました、契約者データ挿入完了。契約者名....</div>
<br><br>
<div id="contractor">
              
              <div class="row">
                  <div class="col-sm-3">id(hiddenにする)</div>
                  <div class="col-sm-9 form-inline" style="padding: 3px;">
                      <input class="form-control input-sm" type="text" name="id" value="">
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-3">契約者氏名</div>
                  <div class="col-sm-9 form-inline" style="padding: 3px;">
                      <input class="form-control input-sm" type="text" name="name" value="{{old('name')}}" placeholder="契約者氏名" size="20">
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-3">サービス開始</div>
                  <div class="col-sm-9 form-inline" style="padding: 3px;">
                      <input class="form-control input-sm" name="service_s" placeholder="契約者氏名" size="20" type="date" value="{{old('service_s')}}">
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-3">郵便番号</div>
                  <div class="col-sm-9 form-inline" style="padding: 3px;">
	            <input type="text" name="postal" class="form-control" placeholder="〒000-0000" value="{{old('postal')}}">
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-3">住所</div>
                  <div class="col-sm-9 form-inline" style="padding: 3px;">
                      <input class="form-control input-sm" name="address" placeholder="住所" size="30" type="text" value="{{old('address')}}">
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-3">部屋番号</div>
                  <div class="col-sm-9 form-inline" style="padding: 3px;">
                      <input class="form-control input-sm" name="room_number" placeholder="部屋番号（任意入力）" size="20" type="text" value="{{old('room_number')}}">
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-3">住所2</div>
                  <div class="col-sm-9 form-inline" style="padding: 3px;">
                      <input class="form-control input-sm" name="address2" placeholder="住所2（任意入力）" size="30" type="text" value="{{old('address2')}}">
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-3">部屋番号2</div>
                  <div class="col-sm-9 form-inline" style="padding: 3px;">
                      <input class="form-control input-sm" name="room_number2" placeholder="部屋番号2（任意入力）" size="20" type="text" value="{{old('room_number2')}}">
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-3">電話番号2</div>
                  <div class="col-sm-9 form-inline" style="padding: 3px;">
                      <input class="form-control input-sm" name="tel2" placeholder="00-0000-0000" size="20" type="tel" value="{{old('tel2')}}">
                  </div>
              </div>
</div>

<div id="inquiry">
              <div class="row">
                  <div class="col-sm-3">代理店名</div>
                  <div class="col-sm-9 form-inline" style="padding: 3px;">
                      <input class="form-control input-sm" name="agency" placeholder="代理店名" size="30" type="text" value="{{old('agency')}}">
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-3">販売店名</div>
                  <div class="col-sm-9 form-inline" style="padding: 3px;">
                      <input class="form-control input-sm" name="sales" placeholder="販売店名" size="30" type="text" value="{{old('sales')}}">
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-3">入電者</div>
                  <div class="col-sm-9 form-inline" style="padding: 3px;">
                      <input class="form-control input-sm" name="income" placeholder="入電者" size="20" type="text" value="{{old('income')}}">
                  </div>
              </div>
              <div class="row">
                 <div class="col-sm-3">入電者の関係</div>
                 <div class="col-sm-9" style="padding: 3px;">
                     <input class="form-control input-sm" name="relation" placeholder="入電者の関係" type="text" value="{{old('relation')}}">
                 </div>
              </div>
              <div class="row">
                 <div class="col-sm-3">入電の概要</div>
                 <div class="col-sm-9" style="padding: 3px;">
                     <input class="form-control input-sm" name="overview" placeholder="入電の概要" type="text" value="{{old('overview')}}">
                 </div>
              </div>
              <div class="row">
                 <div class="col-sm-3">受付内容</div>
                 <div class="col-sm-9" style="padding: 3px;">
                     <textarea class="form-control  input-sm" rows="3" name="contents" placeholder="受付内容">{{old('contents')}}</textarea>
                 </div>
              </div>
              <div class="row">
                 <div class="col-sm-3">対応内容</div>
                 <div class="col-sm-9" style="padding: 3px;">
                     <textarea class="form-control  input-sm" rows="3" name="response" placeholder="対応内容">{{old('response')}}</textarea>
                 </div>
              </div>
              <div class="row">
                  <div class="col-sm-3">連絡希望者</div>
                  <div class="col-sm-9 form-inline" style="padding: 3px;">
                      <input class="form-control input-sm" name="contact" placeholder="連絡希望者" size="20" type="text" value="{{old('contact')}}">
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-3">連絡先</div>
                  <div class="col-sm-9 form-inline" style="padding: 3px;">
                      <input class="form-control input-sm" name="contact_n" placeholder="00-0000-0000" size="20" type="tel" value="{{old('contact_n')}}">
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-3">時間指定（任意入力）</div>
                  <div class="col-sm-9 form-inline" style="padding: 3px;">
                      <input class="form-control input-sm" name="call_time" placeholder="時間指定" size="20" type="text" value="{{old('call_time')}}">
                  </div>
              </div>
</div>
   
              <div class="text-center" style="padding: 30px;">
                 <button type="submit" class="btn btn-success">送信内容の確認 <span class="glyphicon glyphicon-chevron-right"></span></button>
              </div>

            </div>

        <div>
    <div>
</div>
</body>
</html>
