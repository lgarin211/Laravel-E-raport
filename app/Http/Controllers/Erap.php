<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Auth;

class Erap extends Controller
{
    public function __construct()
    {
        $is = Auth::user()->name;
    }
    public function pas()
    {
    }
}
