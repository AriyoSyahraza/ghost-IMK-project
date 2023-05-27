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
        

        return view('index', compact('costs'));
    }
    public function show($costName)
    {
        $cost = Cost::where('cost_name', str_replace('-', ' ', $costName))->firstOrFail();
        return view('detail-cost', compact('cost'));
    }
}
