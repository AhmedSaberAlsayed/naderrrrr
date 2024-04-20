<?php

namespace App\Http\Controllers\NewsPage;

use App\Models\News;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsWebSiteController extends Controller
{
    
    public function index()
    {
        $Categories=Category::with('SupCategory','News')->orderBy('created_at', 'DESC')->get();
        $News= News::with('Category','User','SupCategory')->orderBy('created_at', 'DESC')->paginate(16);
        $TheTopNews=News::with('Category','User','SupCategory')->take(10)->get();
        // dd($TheTopNews);
        // dd($Categories);

        return view("NewsPage.index",compact('Categories','News','TheTopNews'));
    }
    public function show(News $news)
    {
        #make a show fun
        // $Categories=Category::with('SupCategory', 'News')->get();
        // $News= News::with('Category', 'User', 'SupCategory')->get();
        return view("NewsPage.single-page");
        // return view("NewsPage.index", compact('Categories', 'News'));






        // $Categories=Category::with('SupCategory','News')->get();
        // $News= News::with('Category','User','SupCategory')->get();

        // dd($Categories);

        // return view("NewsPage.index",compact('Categories','News'));
    }

    
}
