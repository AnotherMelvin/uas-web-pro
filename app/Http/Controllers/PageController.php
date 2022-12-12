<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

function seoUrl($string) {
    $string = strtolower($string);
    $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
    $string = preg_replace("/[\s-]+/", " ", $string);
    $string = preg_replace("/[\s_]/", "-", $string);
    return $string;
}

function dateConvert($timestamp) {
    $day = date('d', strtotime($timestamp));
    $month = date("F", strtotime($timestamp));
    $year = date("Y", strtotime($timestamp));
    $date = $month . " " . $day . ", " . $year;
    return $date;
}

class PageController extends Controller
{
    public function index() {
        $berita = Article::where('category', '!=', 'Renungan')->orderBy("created_at", "desc")->limit(6)->get();
        $renungan = Article::where('category', '=', 'Renungan')->orderBy("created_at", "desc")->limit(6)->get();

        $beritaDate = array();
        $beritaHeader = array();
        $beritaLink = array();
        $renunganDate = array();
        $renunganLink = array();
        $renunganHeader = array();

        foreach ($berita as $br) {
            array_push($beritaDate, dateConvert($br->created_at));
            array_push($beritaLink, seoUrl($br->title));
            array_push($beritaHeader, Storage::url($br->header));
        }

        foreach ($renungan as $rn) {
            array_push($renunganDate, dateConvert($rn->created_at));
            array_push($renunganLink, seoUrl($rn->title));
            array_push($renunganHeader, Storage::url($rn->header));
        }

        return view('index', ['berita' => $berita, 'brDate' => $beritaDate, 'brLink' => $beritaLink, 'brHeader' => $beritaHeader, 
        'renungan' => $renungan, 'rnDate' => $renunganDate, 'rnLink' => $renunganLink, 'rnHeader' => $renunganHeader]);
    }

    public function berita() {
        $berita = Article::where('category', '!=', 'Renungan')->orderBy("created_at", "desc")->simplePaginate(10);

        $beritaDate = array();
        $beritaHeader = array();
        $beritaLink = array();

        foreach ($berita as $br) {
            array_push($beritaDate, dateConvert($br->created_at));
            array_push($beritaLink, seoUrl($br->title));
            array_push($beritaHeader, Storage::url($br->header));
        }

        return view('berita.list', ['berita' => $berita, 'brDate' => $beritaDate, 'brLink' => $beritaLink, 'brHeader' => $beritaHeader]);
    }

    public function renungan() {
        $renungan = Article::where('category', '=', 'Renungan')->orderBy("created_at", "desc")->simplePaginate(10);

        $renunganDate = array();
        $renunganHeader = array();
        $renunganLink = array();

        foreach ($renungan as $rn) {
            array_push($renunganDate, dateConvert($rn->created_at));
            array_push($renunganLink, seoUrl($rn->title));
            array_push($renunganHeader, Storage::url($rn->header));
        }

        return view('renungan.list', ['renungan' => $renungan, 'rnDate' => $renunganDate, 'rnLink' => $renunganLink, 'rnHeader' => $renunganHeader]);
    }
}
