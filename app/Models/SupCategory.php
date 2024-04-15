<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupCategory extends Model
{
    use HasFactory;

    protected $fillable = ['title','categoryID'];

    public function News(){
        return $this->belongsTo(News::class);

    }
}
