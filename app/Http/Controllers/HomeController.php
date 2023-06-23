<?php

namespace App\Http\Controllers;

use App\Enums\PublishStatus;
use App\Models\About;
use App\Models\Article;
use App\Models\Paper;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $slider = Slider::get();
        $article = Article::latest('id')->first();
        $about = About::first();
        $articles = Article::latest('id')->limit(4)->get();
        $picks = Article::where('popularity', '>=', '1')->limit(4)->get();
        $paper = Paper::first();
        return view('user.pages.home', compact('slider', 'article', 'articles', 'about', 'paper', 'picks'));
    }
}
