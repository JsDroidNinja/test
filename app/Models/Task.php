<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Task extends Model
{
    use HasFactory,SoftDeletes;

    public function task_images(){
        $this->hasMany(TaskImage::class);
    }

    public function category(){
        $this->belongsTo(Category::class);
    }
}
