<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;

class Page extends Controller{
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
    public function create(Request $request)
    {
        $path = $request->file('photo')->storePublicly('photos', 'public');
        $ext = $request->file('photo')->extension();
        $page = new Page();
        $page->title = $request->title_berita;
        $page->title = $request->konten_berita;
        $page->photo = $path;
        $page->save();

        return redirect('/page/home');
    }
    public function read()
    {
        $page = Page::all();
        $photo = Storage::url($page->photo);
        return view('pages.show', ['pages'=>$page, 'photo'=>$photo]);
    }
    public function store(Request $request)
    {
        $path = $request->file('photo')->storePublicly('photos', 'public');
        $ext = $request->file('photo')->extension();
        $page = new Page();
        $page->title = $request->title_berita;
        $page->title = $request->konten_berita;
        $page->photo = $path;
        $page->save();

        return redirect('/page/home');
    }
    public function edit(Request $request, $id)
    {
        $page = Page::findOrFail($id);
        $page->nim = $request->nim;
        $page->nama = $request->nama;
        $page->prodi = $request->prodi;
        $page->save();
        return redirect('/pages/home');
    }
    public function destroy($id)
    {
        $page = Page::find($id);
        $page->delete();
        return redirect('/pages/home');
    }
}
