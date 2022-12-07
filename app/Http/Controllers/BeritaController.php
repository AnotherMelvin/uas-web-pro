<?php

namespace App\Http\Controllers;

use App\Models\Pages;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */     
    public function index()
    {
        $page = Pages::all();
        return view('pages.index', ['pages' => $page]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path = $request->file('photo')->storePublicly('photos', 'public');
        $ext = $request->file('photo')->extension();
        $page = new Pages();
        $page->title = $request->title_berita;
        $page->content = $request->konten_berita;
        $page->photo = $path;
        $page->save();

        $berita = Pages::all();
        return view('pages.index', ['pages' => $berita]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $page = Pages::findOrFail($id);
        $photo = Storage::url($page->photo);
        return view('pages.show', ['page'=>$page, 'photo'=>$photo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page = Pages::findOrFail($id);
        return view('pages.edit', ['page'=>$page]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $page = Pages::findOrFail($id);
        $path = $request->file('photo')->storePublicly('photos', 'public');
        $ext = $request->file('photo')->extension();
        $page->title = $request->title_berita;
        $page->content = $request->konten_berita;
        $page->photo = $path;
        $page->save();

        $berita = Pages::all();
        return view('pages.index', ['pages' => $berita]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $page = Pages::find($id);
        $page->delete();

        $berita = Pages::all();
        return view('pages.index', ['pages' => $berita]);
    }
}
