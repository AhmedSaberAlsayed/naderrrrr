<?php

namespace App\Models;

use App\Models\News;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SupCategory extends Model
{
    use HasFactory;

    protected $fillable = ['title','categoryID'];

    public function News(){
        return $this->belongsTo(News::class);
    }
    public function Category(){
        return $this->hasMany(Category::class,'id');
    }
}
