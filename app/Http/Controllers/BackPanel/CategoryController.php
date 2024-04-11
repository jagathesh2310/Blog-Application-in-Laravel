<?php

namespace App\Http\Controllers\BackPanel;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Category::all();
        return view('layouts.backend.category.list',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.backend.category.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category = new Category;
      //  $category->image =  $request->file('file')->store('images','public');
        $category->name  = $request->name;
        $category->save();

        return redirect()->back()->with('meaasage','category create successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $user = Category::find($request->id);
        return view('layouts.backend.category.update',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $category = Category::find($request->id);
      //  $category->image =  $request->file('image')->store('images','public');
        $category->name  = $request->name;
        $category->save();

        return redirect()->back()->with('meaasage','category create successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Request $request)
    {

        $category = Category::find($request->id);
        $category->delete();
        return redirect()->back()->with('meaasage','category create successfully');
    }
}
