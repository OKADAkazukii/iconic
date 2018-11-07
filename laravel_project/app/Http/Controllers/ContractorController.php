<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContractorController extends Controller
{
    public function search()
    {
        return view('Contractor.search');
    }
}
