<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function show() {
        return view('gallery.show');
    }

    public function open($code) {
        $galleries = Gallery::where('code', $code)->get();
        return view('gallery.open', ['galleries' => $galleries]);
    }
}
