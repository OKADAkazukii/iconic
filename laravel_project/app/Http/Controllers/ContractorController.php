<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContractorController extends Controller
{
    public function search()
    {
        return view('Contractor.search');
    } 
 
    public function test(Request $req)
    {
    $ttt = $req ->tel;
          

         return view('Contractor.test',compact("ttt"));

  
   }}
