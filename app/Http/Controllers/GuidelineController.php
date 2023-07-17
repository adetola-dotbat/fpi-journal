<?php

namespace App\Http\Controllers;

use App\Models\Guideline;
use App\Http\Requests\StoreGuidelineRequest;
use App\Http\Requests\UpdateGuidelineRequest;
use App\Traits\FileTrait;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;

class GuidelineController extends Controller
{
    use FileTrait;
    public function __construct(protected Guideline $guideline)
    {
        //
    }
    public function index()
    {
        $guideline = $this->guideline->first();
        return view('user.pages.guideline', compact('guideline'));
    }

    public function create()
    {
        $guideline = $this->guideline->first();
        return view('administration.pages.guideline', compact('guideline'));
    }

    public function update(StoreGuidelineRequest $request)
    {
        $guideline = $this->guideline->first();
        $guideline->update($request->validated());
        return redirect()->back();
    }

    public function updateFile(UpdateGuidelineRequest $request)
    {
        $guideline = $this->guideline->find($request->guideline_id);
        $fileNameToStore = $this->fileUpload('file', 'storage/guideline/');
        Storage::delete('storage/guideline/' . $guideline->file);
        $guideline->file = $fileNameToStore;
        $guideline->save();
        return redirect()->back()->with('message', 'File Updated Successfully');
    }
}
