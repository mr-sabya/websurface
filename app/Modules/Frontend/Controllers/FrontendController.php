<?php

namespace App\Modules\Frontend\Controllers;

use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend::home.index');
    }
}
