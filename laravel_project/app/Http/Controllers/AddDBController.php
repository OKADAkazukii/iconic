<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdddbController extends Controller
{
    public function write()
    {
        return view('AddDB.adddb_form');
    }
}
