<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InquiryController extends Controller
{
    public function index(Request $request)
    {
    $inquirys = \DB::table('inquiry')->get();
    return view('Inquiry.index',compact('inquirys'));
    }

    public function show($id)
    {
    $inquiry = DB::table("inquiry")->where("id","=","$id")->get();
    return view('Inquiry.show',compact('inquiry'));
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
        'response' => 'required|string|max:1000',
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

    return redirect("home/inquiry/{$u_inquiry['id']}");
    }
}
