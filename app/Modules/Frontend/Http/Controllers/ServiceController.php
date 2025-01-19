<?php

namespace App\Modules\Frontend\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public function index()
    {
        return view('frontend::pages.service.index');
    }
}