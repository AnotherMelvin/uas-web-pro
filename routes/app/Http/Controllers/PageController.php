<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller{
    public function index(){
        return View('pages.main');
    }
    public function bergabung(){
        return View('pages.bergabung');
    }
    public function saveBergabung(Request $r)
    {
        return $r;
    }
}
