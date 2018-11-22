<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ContractorController extends Controller
{
    public function search()
    {
        return view('Contractor.search');
    } 
 
    public function test(Request $req)
    {
        $tel = $req->input('tel');

        if(DB::table('inquiry')->where('tel','=',$tel)->count()>0){
            $contractor_id = DB::table('inquiry')->where('tel','=',$tel)->value('contractor_id');
            $contractor = DB::table('contractor')->where('id','=',$contractor_id)->first();
            if(DB::table('inquiry')->where('contractor_id','=',$contractor_id)->count()>0){
                $c_inquirys = DB::table('inquiry')->where('contractor_id','=',$contractor_id)
                ->orderBy('create_time','desc')->get();
            }
        }
        return view('Contractor.test',compact('contractor'),compact('c_inquirys'));

   }
}
