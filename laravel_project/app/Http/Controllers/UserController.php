<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
     public function edit(Request $request)
     {
         $users = DB::table('contractor')->where('name','=',"てすと" ,"AND", 'name','=',"てすと")->count();
         if($users==0){
             $test='ユーザーが見つかりません';

         }else{
             $test='ユーザー発見';
         }           

         return view('User.pass_change',['users'=>$users],compact('test'));
     }
}
