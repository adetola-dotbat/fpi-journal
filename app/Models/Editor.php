<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Editor extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function designations()
    {
        return $this->belongsTo(Designation::class, 'designation_id');
    }
}
