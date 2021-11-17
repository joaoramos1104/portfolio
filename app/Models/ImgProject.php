<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImgProject extends Model
{
    use HasFactory;
    protected $fillable = ['img_project'];
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
