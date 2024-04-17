<?php

namespace App\Http\Controllers\NewsPage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsWebSiteController extends Controller
{
    
    public function index()
    {
        return view("NewsPage.index");
    }

    
}
