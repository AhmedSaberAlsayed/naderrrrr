<?php

namespace App\Models;


use App\Models\News;
use App\Models\SupCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['title'];

    public function News(){
        return $this->hasMany(News::class,'categoryID');

    }
    public function SupCategory(){
        return $this->hasMany(SupCategory::class,'categoryID');
    }
}
