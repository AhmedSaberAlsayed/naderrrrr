<?php

namespace App\Http\Controllers\Admin;

use App\Models\News;
use App\Http\Traits\ImagesTrait;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    use ImagesTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $News= News::get();
        return view("News.IndexNews",compact("News"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('News.CreateNews');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNewsRequest $request)
    {
        $fileName= time() . '.' . $request->image_path->extension();
        $this->uploadimg($request->image_path, $fileName, 'Imag_Nwes');
        News::create([
            'title'=> $request->title,
            'content'=> $request->content,
            'image_path'=> $fileName,
            'keyWords'=> $request->keyWords,
            'timeReading'=> $request->timeReading,
            'createdBy'=> $request->createdBy,
            'categoryID'=> $request->categoryID,
            'supCategoryID'=> $request->supCategoryID,

        ]);
        return redirect()->route("News.index")->with("success","News was added");
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $News = News::where('id',$request->News_id)->first();
        return view('News.EditNews',compact('News'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNewsRequest $request)
    {
        $News=News::where('id',$request->News_id)->first();

        $fileName= time() . '.' . $request->image_path->extension();
        $this->uploadimg($request->image_path, $fileName, 'Imag_Nwes',$News->image_path);
        $News->update([
            'title'=> $request->title,
            'content'=> $request->content,
            'image_path'=> $fileName,
            'keyWords'=> $request->keyWords,
            'timeReading'=> $request->timeReading,
            'createdBy'=> $request->createdBy,
            'categoryID'=> $request->categoryID,
            'supCategoryID'=> $request->supCategoryID,

        ]);
        return redirect()->route("News.index")->with("success","News was updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($News_id )
    {
        $News= News::find( $News_id );
        unlink(public_path($News->image_path));
        $News->delete();
        session()->flash('done','note was deleted');
        return redirect()->route('News.index');
    }
}
