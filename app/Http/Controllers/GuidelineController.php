<?php

namespace App\Http\Controllers;

use App\Models\Guideline;
use App\Http\Requests\StoreGuidelineRequest;
use App\Http\Requests\UpdateGuidelineRequest;

class GuidelineController extends Controller
{
    public function __construct(protected Guideline $guideline)
   {
    //
   }
    public function index()
    {
       $guideline = $this->guideline->first();
       return view('user.pages.guideline', compact('guideline'));
    }

    public function createGuideline()
    {
        $guideline = $this->guideline->first();
       return view('administration.pages.guideline', compact('guideline'));
    }

    public function storeGuideline(StoreGuidelineRequest $request)
    {
        $this->guideline->create($request->validated());
        $guideline = $this->guideline->first();
       return view('administration.pages.guideline', compact('guideline'));
    }
}
