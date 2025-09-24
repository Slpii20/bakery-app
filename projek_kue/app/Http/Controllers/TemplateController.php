<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function master()
    {
       return view('master');
    }

    public function index()
    {
       return view('beranda');
    }

    public function templating_login()
    {
       return view('templating_login');
    }

}
