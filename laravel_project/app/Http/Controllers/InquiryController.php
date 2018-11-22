<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;
use Illuminate\Auth\Middleware\Authenticate;

class InquiryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
    $inquirys = \DB::table('inquiry')->orderBy('create_time','desc')->paginate(5);
    return view('Inquiry.index', compact('inquirys'));
    }

    public function show($id)
    {
    $inquiry = DB::table("inquiry")->where("id","=","$id")->get();
    $contractor = DB::table("contractor")->where("id","=","{$inquiry[0]->contractor_id}")->get();
    $user = DB::table("users")->where("id","=","{$inquiry[0]->user_id}")->get(['name']);
    $data = ['user'=>"{$user[0]->name}", 'contractor_name'=>"{$contractor[0]->name}",'contractor_service'=>"{$contractor[0]->service_s}",'contractor_postal'=>"{$contractor[0]->postal}",'contractor_address'=>"{$contractor[0]->address}"];
    return view('Inquiry.show',compact('inquiry'),compact('data'));
    }

    public function edit($id)
    {
    $inquiry = DB::table("inquiry")->where("id","=","$id")->get();
    return view('Inquiry.edit',compact('inquiry'));
    }

    public function update(Request $request)
    {
    $request->validate([
        'tel' => 'required|string|max:13',
        'income' => 'required|string|max:255',
        'relation' => 'required|string|max:255',
        'overview' => 'required|string|max:255',
        'sales' => 'required|string|max:255',
        'agency' => 'required|string|max:255',
        'contents' => 'required|string|max:1000',
        'contact' => 'required|string|max:255',
        'contact_n' => 'required|string|max:13',
        'call_time' => 'max:255'
        ]);

    $u_inquiry  = $request->all();

        DB::table('inquiry')->where('id', $u_inquiry['id'])->update([
        'id' => $u_inquiry['id'],
        'create_time' => $u_inquiry['create_time'],
        'user_id' => $u_inquiry['user_id'],
        'contractor_id' => $u_inquiry['contractor_id'],
        'tel' => $u_inquiry['tel'],
        'tel2' => $u_inquiry['tel2'],
        'income' => $u_inquiry['income'],
        'relation' => $u_inquiry['relation'],
        'overview' => $u_inquiry['overview'],
        'sales' => $u_inquiry['sales'],
        'agency' => $u_inquiry['agency'],
        'contents' => $u_inquiry['contents'],
        'response' => $u_inquiry['response'],
        'work' => $u_inquiry['work'],
        'contact' => $u_inquiry['contact'],
        'contact_n' => $u_inquiry['contact_n'],
        'call_time' => $u_inquiry['call_time']
        ]);

        //ステータス切り替え
        if($u_inquiry['response']=='' && $u_inquiry['work']==''){
            DB::table('inquiry')->where('id', $u_inquiry['id'])->update(['status' => 0]);
        }elseif(!$u_inquiry['response']=='' && $u_inquiry['work']==''){
            DB::table('inquiry')->where('id', $u_inquiry['id'])->update(['status' => 1]);

        }elseif($u_inquiry['work']=='' && !$u_inquiry['response']==''){
            DB::table('inquiry')->where('id', $u_inquiry['id'])->update(['status' => 2]);
        }elseif(!$u_inquiry['work']=='' && !$u_inquiry['response']==''){
            DB::table('inquiry')->where('id', $u_inquiry['id'])->update(['status' => 3]);
        }else{
            DB::table('inquiry')->where('id', $u_inquiry['id'])->update(['status' => 0]);
        }
        //
    return redirect("home/inquiry/{$u_inquiry['id']}");
    }

    public function statusindex()
    {
    $support0 = DB::table('inquiry')->where("status","=",0)->orderBy('create_time','desc')->get();
    $support1 = DB::table('inquiry')->where("status","=",1)->orderBy('create_time','desc')->get();
    $support2 = DB::table('inquiry')->where("status","=",2)->orderBy('create_time','desc')->get();
    $support3 = DB::table('inquiry')->where("status","=",3)->orderBy('create_time','desc')->get();
    $support4 = DB::table('inquiry')->where("status","=",4)->orderBy('create_time','desc')->get();
    $support = [0=>$support0, 1=>$support1, 2=>$support2, 3=>$support3, 4=>$support4];
    return view('Inquiry.status_index', compact('support'));
    }

    public function statuschange(Request $request)
    {
    $c_status = $request->all();
    DB::table('inquiry')->where('id', $c_status['id'])->update([
        'status' => $c_status['status']
    ]);
    return redirect("home/inquiry/{$c_status['id']}");
    }

}
