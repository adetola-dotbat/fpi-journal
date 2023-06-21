<?php

namespace App\Http\Controllers;

use App\Enums\PublishStatus;
use App\Http\Requests\StoreManuscriptRequest;
use App\Http\Requests\UpdateManuscriptRequest;
use App\Models\Manuscript;
use App\Traits\FileTrait;
use Illuminate\Http\Request;

class ManuscriptController extends Controller
{
    use FileTrait;
    public function __construct(protected Manuscript $manuscript)
    {
    }
    public function manuscript()
    {
        if (auth()->user()->role == 'user') {
            return view('user.pages.manuscript');
        }
    }
    public function store(StoreManuscriptRequest $request)
    {
        $fileNameToStore = $this->fileUpload('file', 'storage/manuscript/');
        $this->manuscript->create(
            [
                'title' => $request->title,
                'abstract' => $request->abstract,
                'file' => $fileNameToStore,
                'page_no' => $request->page_no,
                'authors' => $request->authors,
                'user_id' => auth()->user()->id,
            ]
        );
        return redirect()->back();
    }

    public function show()
    {
        $manuscripts = $this->manuscript->orderby('id', 'desc')->get();
        return view('administration.pages.show-manuscript', compact('manuscripts'));
    }

    public function details($manuscript)
    {
        $manuscript = $this->manuscript->find($manuscript);
        return view('administration.pages.manuscript-details', compact('manuscript'));
    }

    public function create()
    {
        return view('administration.pages.manuscript');
    }

    public function adminStoreManuscript(StoreManuscriptRequest $request)
    {
        $fileNameToStore = $this->fileUpload('file', 'storage/manuscript/');
        $this->manuscript->create(
            [
                'title' => $request->title,
                'abstract' => $request->abstract,
                'file' => $fileNameToStore,
                'page_no' => $request->page_no,
                'authors' => $request->authors,
                'user_id' => auth()->user()->id,
            ]
        );
        return redirect()->back();
    }
    public function publish($manuscript)
    {
        $manuscript = $this->manuscript->find($manuscript);
        if ($manuscript->publish_status == 'pending') {
            $manuscript->publish_status = PublishStatus::PUBLISHED;
            $manuscript->save();
        } else {
            $manuscript->publish_status = PublishStatus::PENDING;
            $manuscript->save();
        }

        return redirect()->back();
    }

    public function edit($manuscript)
    {
        $manuscript = $this->manuscript->find($manuscript);
        return view('administration.pages.edit-manuscript', compact('manuscript'));
    }
    public function update(UpdateManuscriptRequest $request, $manuscript)
    {
        $manuscript = $this->manuscript->find($manuscript);
        $manuscript->update($request->validated());
        return redirect()->back();
    }
    public function delete($manuscript)
    {
        $this->manuscript->find($manuscript)->delete();
        return redirect()->back();
    }
}
