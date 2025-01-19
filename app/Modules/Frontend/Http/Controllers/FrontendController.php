<?php

namespace App\Modules\Frontend\Http\Controllers;

use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend::pages.home.index');
    }
}
