<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        return view('home', ['articles' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'category' => 'required'
        ]);

        if ($request->file('header') == '') {
            $path = 'header/IpxznGG2bc9INLjCIqpqoS1A2qoTDRql66mX29oK.png';
        } else {
            $path = $request->file('header')->storePublicly('header', 'public');
        }

        $article = new Article();
        $article->user_id = Auth::id();
        $article->title = $request->title;
        $article->subtitle = $request->subtitle;
        $article->category = $request->category;
        $article->content = $request->content;
        $article->header = $path;
        $article->save();
        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::findOrFail($id);
        $author = User::findOrFail($article->user_id);
        $header = Storage::url($article->header);

        $day = date('d', strtotime($article->created_at));
        $month = date("F", strtotime($article->created_at));
        $year = date("Y", strtotime($article->created_at));
        $date = $month . " " . $day . ", " . $year;

        return view('articles.show', ['article' => $article, 'header' => $header, 'date' => $date, 'author' => $author]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        $header = Storage::url($article->header);
        return view('articles.edit', ['article' => $article, 'header' => $header]);
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
        $this->validate($request, [
            'title' => 'required',
            'category' => 'required'
        ]);

        if ($request->file('header') == '') {
            $path = $request->oldheader;
        } else {
            $path = $request->file('header')->storePublicly('header', 'public');
        }

        $article = Article::find($id);
        $article->title = $request->title;
        $article->subtitle = $request->subtitle;
        $article->category = $request->category;
        $article->content = $request->content;
        $article->header = $path;
        $article->save();
        return redirect('/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();
        return redirect('/dashboard');
    }
}
