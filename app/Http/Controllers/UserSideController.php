<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserSideController extends Controller
{
    public function renderComingSoonPage()
    {
        return view('coming-soon');
    }
}
