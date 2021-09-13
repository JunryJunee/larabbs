<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function root()
    {
        return view('pages.root');
    }
}