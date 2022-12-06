<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class Layout extends Controller{
    public function index(){
        return View('layout.main');
    }
    public function bergabung(){
        return View('layout.bergabung');
    }
    public function saveBergabung(Request $r)
    {
        return $r;
    }
}
