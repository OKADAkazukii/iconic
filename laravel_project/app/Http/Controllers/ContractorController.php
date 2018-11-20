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
        $aaa = $req->input ('tel');

        if(DB::table('inquiry')->where('tel','=',$aaa)->count()>0){
            $bbb = DB::table('inquiry')->where('tel','=',$aaa)->value('contractor_id');
            $ttt = DB::table('contractor')->where('id','=',$bbb)->first(); 
 
        }else{
            $ttt = "Nothing";
        }

        return view('Contractor.test',compact('ttt'));

   }
}
