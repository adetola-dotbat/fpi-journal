<?php

namespace App\Http\Controllers;

use App\Models\ArticleTemplate;
use App\Http\Requests\StoreArticleTemplateRequest;
use App\Http\Requests\UpdateArticleTemplateRequest;

class ArticleTemplateController extends Controller
{
   public function __construct(protected ArticleTemplate $articleTemplate)
   {
    //
   }
    public function index()
    {
       $articleTemplate = $this->articleTemplate->first();
       return view('user.pages.article-template', compact('articleTemplate'));
    }

    public function createArticleTemplate()
    {
        $articleTemplate = $this->articleTemplate->first();
       return view('administration.pages.article-template', compact('articleTemplate'));
    }

    public function storeArticleTemplate(StoreArticleTemplateRequest $request)
    {
        $this->articleTemplate->create($request->validated());
        $articleTemplate = $this->articleTemplate->first();
       return view('administration.pages.article-template', compact('articleTemplate'));

    }

}
