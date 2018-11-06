<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
     public function edit(Request $request)
     {
         $users = DB::select('select email from users');
         return view('User.pass_change',['users'=>$users]);
     }
}
