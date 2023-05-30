<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ask;

class FaqController extends Controller
{
    public function index()
    {
        $asks = Ask::get();
        return view('faq.index', [
            'asks' => $asks
        ]);
    }

    public function show($id)
    {
        $ask = Ask::find($id);
        return view('faq.show', [
            'ask' => $ask
        ]);
    }
}
