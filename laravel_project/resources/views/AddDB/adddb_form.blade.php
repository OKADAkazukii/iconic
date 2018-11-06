@extends('layouts.app')

@section('content')
<div class="container">
    <h2>新規入電情報登録フォーム</h2>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="container">

              <div class="row">
                  <div class="col-sm-3">契約者氏名</div>
                  <div class="col-sm-9 form-inline" style="padding: 3px;">
                      <input class="form-control input-sm" id="name" placeholder="契約者氏名" size="20" type="text">
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-3">サービス開始</div>
                  <div class="col-sm-9 form-inline" style="padding: 3px;">
                      <input class="form-control input-sm" id="name" placeholder="契約者氏名" size="20" type="date">
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-3">郵便番号</div>
                  <div class="col-sm-9 form-inline" style="padding: 3px;">
	            <input type="text" name="zipcode" id="zipcode" class="form-control" placeholder="〒000-0000">
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-3">住所</div>
                  <div class="col-sm-9 form-inline" style="padding: 3px;">
                      <input class="form-control input-sm" id="name" placeholder="住所" size="30" type="text">
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-3">部屋番号</div>
                  <div class="col-sm-9 form-inline" style="padding: 3px;">
                      <input class="form-control input-sm" id="name" placeholder="部屋番号（任意入力）" size="20" type="text">
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-3">電話番号</div>
                  <div class="col-sm-9 form-inline" style="padding: 3px;">
                      <input class="form-control input-sm" id="name" placeholder="00-0000-0000" size="20" type="tel">
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-3">住所2</div>
                  <div class="col-sm-9 form-inline" style="padding: 3px;">
                      <input class="form-control input-sm" id="name" placeholder="住所2（任意入力）" size="30" type="text">
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-3">部屋番号2</div>
                  <div class="col-sm-9 form-inline" style="padding: 3px;">
                      <input class="form-control input-sm" id="name" placeholder="部屋番号2（任意入力）" size="20" type="text">
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-3">電話番号2</div>
                  <div class="col-sm-9 form-inline" style="padding: 3px;">
                      <input class="form-control input-sm" id="name" placeholder="00-0000-0000" size="20" type="tel">
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-3">代理店名</div>
                  <div class="col-sm-9 form-inline" style="padding: 3px;">
                      <input class="form-control input-sm" id="name" placeholder="代理店名" size="30" type="text">
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-3">販売店名</div>
                  <div class="col-sm-9 form-inline" style="padding: 3px;">
                      <input class="form-control input-sm" id="name" placeholder="販売店名" size="30" type="text">
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-3">入電者</div>
                  <div class="col-sm-9 form-inline" style="padding: 3px;">
                      <input class="form-control input-sm" id="kana" placeholder="入電者" size="20" type="text">
                  </div>
              </div>
              <div class="row">
                 <div class="col-sm-3">入電者の関係</div>
                 <div class="col-sm-9" style="padding: 3px;">
                     <input class="form-control input-sm" id="address" placeholder="入電者の関係" type="text">
                 </div>
              </div>
              <div class="row">
                 <div class="col-sm-3">入電の概要</div>
                 <div class="col-sm-9" style="padding: 3px;">
                     <input class="form-control input-sm" id="address" placeholder="入電の概要" type="text">
                 </div>
              </div>
              <div class="row">
                 <div class="col-sm-3">受付内容</div>
                 <div class="col-sm-9" style="padding: 3px;">
                     <textarea class="form-control  input-sm" rows="3" id="comment" placeholder="受付内容"></textarea>
                 </div>
              </div>
              <div class="row">
                 <div class="col-sm-3">対応内容</div>
                 <div class="col-sm-9" style="padding: 3px;">
                     <textarea class="form-control  input-sm" rows="3" id="comment" placeholder="対応内容"></textarea>
                 </div>
              </div>
              <div class="row">
                  <div class="col-sm-3">連絡希望者</div>
                  <div class="col-sm-9 form-inline" style="padding: 3px;">
                      <input class="form-control input-sm" id="name" placeholder="連絡希望者" size="20" type="text">
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-3">連絡先</div>
                  <div class="col-sm-9 form-inline" style="padding: 3px;">
                      <input class="form-control input-sm" id="name" placeholder="00-0000-0000" size="20" type="tel">
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-3">時間指定（任意入力）</div>
                  <div class="col-sm-9 form-inline" style="padding: 3px;">
                      <input class="form-control input-sm" id="name" placeholder="時間指定" size="20" type="text">
                  </div>
              </div>

   
              <div class="text-center" style="padding: 30px;">
                 <button type="button" class="btn btn-success">送信内容の確認 <span class="glyphicon glyphicon-chevron-right"></span></button>
              </div>

            </div>

        <div>
    <div>
</div>
@endsection
