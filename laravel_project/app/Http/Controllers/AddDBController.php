<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Inquiry;
use Illuminate\Auth\Middleware\Authenticate;

class AdddbController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function write()
    {
        $ldate = date('Y-m-d H:i');
        return view('AddDB.adddb_form',compact('ldate'));
    }

    public function getContractor($tel)
    {
        if($contractor_id = DB::table("inquiry")->where("tel","=","$tel")->get(["contractor_id"])){
            $contractor = DB::table("contractor")->where("id","=","$contractor_id")->get();
        }else{
            $contractor = '該当する顧客が見つかりませんでした';
        }
        return response()->json($contractor);
    }

    public function json()
    {
        return view('AddDB.jsondata');
    }

    public function submit(Request $request)
    {
        $request->validate([
        'name' => 'required|string|max:255',
        'service_s' => 'required',
        'postal' => 'required|string|max:8',
        'address' => 'required|string|max:255',
        'room_number' => 'max:255',
        'tel' => 'required|string|max:13',
        'address2' => 'max:255',
        'room_number2' => 'max:255',
        'tel2' => 'max:13',
        'agency' => 'required|string|max:255',
        'sales' => 'required|string|max:255',
        'income' => 'required|string|max:255',
        'relation' => 'required|string|max:255',
        'overview' => 'required|string|max:255',
        'contents' => 'required|string|max:1000',
        'response' => 'required|string|max:1000',
        'contact' => 'required|string|max:255',
        'contact_n' => 'required|string|max:13',
        'call_time' => 'max:255'
        ]);

        $post_data  = $request->all();

        return view('AddDB.submit',compact('post_data'));
    } 

    public function add(Request $request)
    {
        $add_data  = $request->all();

        $name = $add_data['name'];
        $service_s = $add_data['service_s'];
        $postal = $add_data['postal'];
        $address = $add_data['address'];
        $s_address = $add_data['address2'];
        $room_number = $add_data['room_number'];

    //同一契約者の検索
        $contractor = DB::table("contractor")->where("name","=","$name","AND", 
             'service_s','=',"$service_s","AND", 'postal','=',"$postal","AND",
             'address','=',"$address","AND",'s_address','=',"$s_address","AND",
             'room_number','=',"$room_number")->count();

        $l_user = \Auth::user();

         if($contractor==0){
           //契約者の登録（該当契約者いない場合に動作）
             $test='同一名いないので登録';
             DB::table('contractor')->insert([
             'name' => $name,
             'service_s' => $service_s,
             'postal' => $postal,
             'address' => $address,
             's_address' => $s_address,
             'room_number' => $room_number,
             ]);

             $contractor_id = DB::table("contractor")->where("name","=","$name","AND", 
             'service_s','=',"$service_s","AND", 'postal','=',"$postal","AND",
             'address','=',"$address","AND",'s_address','=',"$s_address","AND",
             'room_number','=',"$room_number")->value('id');
         }else{
             $test='同一名いるので入電情報だけ登録';

             $contractor_id = DB::table("contractor")->where("name","=","$name","AND", 
             'service_s','=',"$service_s","AND", 'postal','=',"$postal","AND",
             'address','=',"$address","AND",'s_address','=',"$s_address","AND",
             'room_number','=',"$room_number")->value('id');
         }

    //入電情報の登録
        DB::table('inquiry')->insert([
        'create_time' => $add_data["create_time"],
        'user_id' => $l_user->id,
        'contractor_id' => $contractor_id,
        'tel' => $add_data["tel"],
        'income' => $add_data["income"],
        'relation' => $add_data["relation"],
        'overview' => $add_data["overview"],
        'sales' => $add_data["sales"],
        'agency' => $add_data["agency"],
        'contents' => $add_data["contents"],
        'response' => $add_data["response"],
        'work' => 'unknown',
        'contact' => $add_data["contact"],
        'contact_n' => $add_data["contact_n"],
        'call_time' => $add_data["call_time"]
        ]);

        return view('AddDB.add',compact('test'));
    }
}
