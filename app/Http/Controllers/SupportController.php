<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function SupportPage() {
        return view('support.supportpage');
    }
}
