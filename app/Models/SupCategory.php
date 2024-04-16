<?php

namespace App\Models;

<<<<<<< HEAD
use App\Models\News;
use App\Models\Category;
=======
>>>>>>> 204e6bb5e07d424bcc066b3dc934aa48d5d6352f
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SupCategory extends Model
{
    use HasFactory;

    protected $fillable = ['title','categoryID'];

    public function News(){
        return $this->belongsTo(News::class);
<<<<<<< HEAD
    }
    public function Category(){
        return $this->hasMany(Category::class,'id');
=======
>>>>>>> 204e6bb5e07d424bcc066b3dc934aa48d5d6352f
    }
    public function category(){
        return $this->belongsTo(Category::class,'id');
    }

}
