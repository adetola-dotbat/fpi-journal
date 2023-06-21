<?php

namespace App\Http\Controllers;

use App\Models\Volume;
use App\Http\Requests\StoreVolumeRequest;
use App\Http\Requests\UpdateVolumeRequest;
use App\Traits\FileTrait;

class VolumeController extends Controller
{
    use FileTrait;

    public function __construct(protected Volume $volume)
    {
    }
    public function volume()
    {
        $volumes = $this->volume->get();
        return view('administration.pages.volume', compact('volumes'));
    }
    public function store(StoreVolumeRequest $request)
    {
        if (auth()->user()->role == 'admin') {
            $fileNameToStore = $this->fileUpload('image', 'storage/volume/');
            $this->volume->create([
                'title' => $request->title,
                'description' => $request->description,
                'image' => $fileNameToStore,
            ]);
            return redirect()->back();
        } else {
            abort('402');
        }
    }
    public function delete($volume)
    {
        $volume = $this->volume->find($volume);
        $volume->delete();
        return redirect()->back();
    }
}
