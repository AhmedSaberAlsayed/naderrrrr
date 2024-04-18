<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SupCategory extends Model
{
    use HasFactory;

    protected $fillable = ['title','categoryID'];

    public function News(){
        return $this->belongsTo(News::class);
    }
    public function category(){
        return $this->belongsTo(Category::class,'id');
    }
}
