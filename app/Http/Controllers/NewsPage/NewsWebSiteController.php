<?php

namespace App\Http\Controllers\NewsPage;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsWebSiteController extends Controller
{
    
    public function index()
    {
        $Categories=Category::all();
        // dd($Categories);

        return view("NewsPage.index")->with('Categories',$Categories);
    }

    
}
