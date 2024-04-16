<?php

namespace App\Models;

<<<<<<< HEAD
use App\Models\News;
use App\Models\SupCategory;
=======
>>>>>>> 204e6bb5e07d424bcc066b3dc934aa48d5d6352f
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['title'];
    public function News(){
<<<<<<< HEAD
        return $this->belongsTo(News::class);
    }
    public function SupCategory(){
        return $this->belongsTo(SupCategory::class);
=======
        return $this->belongsTo(News::class,);

    }
    public function SupCategory(){
        return $this->hasMany(SupCategory::class,'categoryID');

>>>>>>> 204e6bb5e07d424bcc066b3dc934aa48d5d6352f
    }
}
