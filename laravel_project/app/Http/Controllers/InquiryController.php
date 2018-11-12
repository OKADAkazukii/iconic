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
}
