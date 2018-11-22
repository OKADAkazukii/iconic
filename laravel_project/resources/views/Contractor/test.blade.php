@extends('layouts.app')

@section('content')

@if(isset($contractor->id))
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <h4 class="card-header">顧客情報</h4>
                    <div>ID : {{$contractor->id}}</div>
                    <div>名前 : {{$contractor->name}}</div>
                    <div>利用開始日 : {{$contractor->service_s}}</div>
                    <div>郵便番号 : {{$contractor->postal}}</div>
                    <div>住所 : {{$contractor->address}}</div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                   <h4 class="card-header">入電情報</h4>
                   @if(isset($c_inquirys))
                       <?php $i = 0 ?>
                       @foreach($c_inquirys as $c_inquiry)
                           <div style="margin:5px 0 15px 10px">
                               <div style="font-weight:bold;"><?php $i++;echo $i.'件目' ?></div>
                               <div>受付時間 : {{$c_inquiry->create_time}}</div>
                               <div>荷電者氏名 : {{$c_inquiry->income}}</div>
                               <div>入電概要 : {{$c_inquiry->overview}}</div>
                               @if($c_inquiry->status==0)
                                   <div style="font-weight:bold; color:red;">未対応</div>
                               @elseif($c_inquiry->status==1)
                                   <div style="font-weight:bold; color:#FF4500;">対応中 速報報告書未送信</div>
                               @elseif($c_inquiry->status==2)
                                   <div style="font-weight:bold; color:#228B22;">対応中 速報報告書送信済み</div>
                               @elseif($c_inquiry->status==3)
                                   <div style="font-weight:bold; color:#6927FF;">対応完了 完了報告書未送信</div>
                               @elseif($c_inquiry->status==4)
                                   <div style="font-weight:bold; color:#005FFF;">対応完了</div>
                               @endif
                               <a href="{{ action('InquiryController@show', $c_inquiry->id) }}">詳細ページ</a>
                           </div>
                       @endforeach
                   @else
                       <div>入電情報はありません</div>
                   @endif
               </div>
           </div>
        </div>
    </div>

                  
@else
    <div>ユーザーが見つかりませんでした...</div>
@endif

@endsection
  
