<?php

namespace App\Http\Controllers;

use App\Enums\PublishStatus;
use App\Models\Article;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use App\Models\Volume;
use App\Traits\FileTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    use FileTrait;
    public function __construct(protected Article $article, protected Volume $volume)
    {
        //
    }
    public function article()
    {
        $articles =  $this->article->orderBy('id', 'desc')->get();
        return view('administration.pages.article', compact('articles'));
    }

    public function showArticle()
    {
        // show all article saved by users in admin table
        $article = $this->article->get();
        return view('administration.pages.article', compact('article'));
    }

    public function store(StoreArticleRequest $request)
    {
        $volume = $this->volume->latest('id')->first();
        // auth user store article
        if (auth()->user()) {
            $fileNameToStore = $this->fileUpload('file', 'storage/article/');
            $data = $this->article->create([
                'volume_id' => $volume->id,
                'title' => $request->title,
                'abstract' => $request->abstract,
                'file' => $fileNameToStore,
                'pages' => $request->pages,
                'author' => $request->author,
                'user_id' => auth()->user()->id
            ]);
            return redirect()->back();
        } else {
            abort('402');
        }
    }

    public function edit($article)
    {
        $articles =  $this->article->orderBy('id', 'desc')->get();

        $article = $this->article->find($article);
        return view('administration.pages.edit-article', compact('article', 'articles'));
    }

    public function update(UpdateArticleRequest $request, $article)
    {
        $this->article->find($article)->update($request->validated());
        return redirect()->back();
    }

    public function updateFile($article)
    {
        $article = $this->article->find($article);
        $fileNameToStore = $this->fileUpload('file', 'storage/article/');
        Storage::delete('storage/article/' . $article->file);
        $article->file = $fileNameToStore;
        $article->save();
        return redirect()->back();
    }

    public function like($item)
    {
        $article = $this->article->find($item);
        ++$article->popularity;
        $article->save();
        return redirect()->back();
    }

    public function publish($article)
    {
        $article = $this->article->find($article);
        if ($article->publish_status == 'pending') {
            $article->publish_status = PublishStatus::PUBLISHED;
            $article->publish_date = now();
            $article->save();
        } else {
            $article->publish_status = PublishStatus::PENDING;
            $article->save();
        }

        return redirect()->back();
    }


    public function adminCreateArticle()
    {
        // admin to create final article
        return view('administration.pages.article', compact('article'));
    }

    public function delete($article)
    {
        $this->article->find($article)->delete();
        return redirect()->back();
    }
}