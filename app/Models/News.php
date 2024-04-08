<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'image_path',
        'keyWords',
        'timeReading',
        'createdBy',
        'categoryID',
        'supCategoryID',
];

    public function User(){
        return $this->hasMany(User::class);
    }

    public function getImagepathAttribute($value){
        return 'images/Imag_Nwes/' .$value ;
    }
}
