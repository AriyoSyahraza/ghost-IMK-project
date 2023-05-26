<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cost;

class CostsController extends Controller
{
    //
    public function index()
    {
        $costs = Cost::get();
        dd($costs);

        return view('index', compact('costs'));
    }
}
