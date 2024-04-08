<?php

namespace App\Http\Controllers\Admin;

use App\Models\SupCategory;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSupCategoryRequest;
use App\Http\Requests\UpdateSupCategoryRequest;
use Illuminate\Http\Request;

class SupCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Sup_Categories= SupCategory::get();
        return view("Sup_Categories.IndexSup_Category",compact("Sup_Categories"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Sup_Categories.CreateSup_Category');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSupCategoryRequest $request)
    {
        SupCategory::create([
            'title'=> $request->title,
            'categoryID'=> $request->categoryID,

        ]);
        return redirect()->route("Sup_category.index")->with("success","category was added");
    }

    /**
     * Display the specified resource.
     */
    public function show(SupCategory $supCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $Sup_Category = SupCategory::where('id',$request->Sup_category)->first();
        return view('Sup_Categories.EditSup_Category',compact('Sup_Category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSupCategoryRequest $request, SupCategory $supCategory)
    {
        $SupCategory=SupCategory::where('id',$request->Sup_category)->first();
        $SupCategory->update([
            'title'=> $request->title,
            'categoryID'=> $request->categoryID,
        ]);
        return redirect()->route("Sup_category.index")->with("success","category was added");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $SupCategory_id )
    {
        $Category= SupCategory::find( $SupCategory_id );


     $Category->delete();
     session()->flash('done','Sup_category was deleted');
     return redirect()->route('Sup_category.index');
    }
}
