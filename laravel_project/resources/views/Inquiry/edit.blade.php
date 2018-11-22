@extends('layouts.app')
@section('content')
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
<div class="container">
    <form action="/home/inquiry/update" method="post" enctype="multipart/form-data">
               {{ csrf_field() }}
              @foreach($inquiry as $edit)

              <input type="hidden" name="id" value="{{$edit->id}}">
              <input type="hidden" name="create_time" value="{{$edit->create_time}}">
              <input type="hidden" name="user_id" value="{{$edit->user_id}}">
              <input type="hidden" name="contractor_id" value="{{$edit->contractor_id}}">

              <div class="row">
                  <div class="col-sm-3">電話番号</div>
                  <div class="col-sm-9 form-inline" style="padding: 3px;">
                      <input class="form-control input-sm" name="tel" size="20" type="tel" value="{{$edit->tel}}">
                  </div>
              </div>
<div class="row">
                  <div class="col-sm-3">電話番号2</div>
                  <div class="col-sm-9 form-inline" style="padding: 3px;">
                      <input class="form-control input-sm" name="tel2" size="20" type="tel" value="{{$edit->tel2}}">
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-3">入電者名</div>
                  <div class="col-sm-9 form-inline" style="padding: 3px;">
                      <input class="form-control input-sm" name="income" size="20" type="text" value="{{$edit->income}}">
                  </div>
              </div>
              <div class="row">
                 <div class="col-sm-3">顧客関係</div>
                 <div class="col-sm-9" style="padding: 3px;">
                     <input class="form-control input-sm" name="relation" type="text" value="{{$edit->relation}}">
                 </div>
              </div>
              <div class="row">
                 <div class="col-sm-3">入電概要</div>
                 <div class="col-sm-9" style="padding: 3px;">
                     <input class="form-control input-sm" name="overview" type="text" value="{{$edit->overview}}">
                 </div>
              </div>
              <div class="row">
                  <div class="col-sm-3">販売店名</div>
                  <div class="col-sm-9 form-inline" style="padding: 3px;">
                      <input class="form-control input-sm" name="sales" size="30" type="text" value="{{$edit->sales}}">
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-3">代理店名</div>
                  <div class="col-sm-9 form-inline" style="padding: 3px;">
                      <input class="form-control input-sm" name="agency" size="30" type="text" value="{{$edit->agency}}">
                  </div>
              </div>
              <div class="row">
                 <div class="col-sm-3">受付内容</div>
                 <div class="col-sm-9" style="padding: 3px;">
                     <textarea class="form-control  input-sm" rows="3" name="contents">{{$edit->contents}}</textarea>
                 </div>
              </div>
              <div class="row">
                 <div class="col-sm-3">対応内容</div>
                 <div class="col-sm-9" style="padding: 3px;">
                     <textarea class="form-control  input-sm" rows="3" name="response">{{$edit->response}}</textarea>
                 </div>
              </div>
              <div class="row">
                 <div class="col-sm-3">作業内容</div>
                 <div class="col-sm-9" style="padding: 3px;">
                     <textarea class="form-control  input-sm" rows="3" name="work">{{$edit->work}}</textarea>
                 </div>
              </div>
              <div class="row">
                  <div class="col-sm-3">連絡希望者</div>
                  <div class="col-sm-9 form-inline" style="padding: 3px;">
                      <input class="form-control input-sm" name="contact" size="20" type="text" value="{{$edit->contact}}">
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-3">連絡番号</div>
                  <div class="col-sm-9 form-inline" style="padding: 3px;">
                      <input class="form-control input-sm" name="contact_n" size="20" type="tel" value="{{$edit->contact_n}}">
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-3">時間指定</div>
                  <div class="col-sm-9 form-inline" style="padding: 3px;">
                      <input class="form-control input-sm" name="call_time" size="20" type="text" value="{{$edit->call_time}}">
                  </div>
              </div>

   
              <div class="text-center" style="padding: 30px;">
                 <button type="submit" class="btn btn-info">内容を変更する <span class="glyphicon glyphicon-chevron-right"></span></button>
              </div>
        @endforeach
</div>
@endsection
