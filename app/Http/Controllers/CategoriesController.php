<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Category;

class CategoriesController extends Controller
{
    //
/* 
    @return \Illuminate\Http\Response;
     */

    public function index(Request $request,)
    {
        $categories = Category::all();
        return view('categories.index', ['categories' => $categories]);
    }

    public function create()
    {
        // 
    }

    public function store(Request $request){
        $request ->validate([
            'name' =>'required|unique|max:255',
            'color' =>'required|max:7'
        ]);
        $category = new Category();
        $category -> name = $request->name;
        $category -> color = $request->color;
        $category -> save();

        return redirect()->route('categories.index')->with('success', 'new category');
    }

    public function show(Request $request, $id){
        $category = Category::find($id);
        return view('categories.show', ['category' => $category]);
    }

    public function update(Request $request, $id){
        $category = Category::find($id);
        $category -> name = $request->name;
        $category -> color = $request->color;
        return view('categories.edit', ['category' => $category]);
    }

    public function destroy(Request $request, $id){
        $category = Category::find($id);
        $category -> delete();
        return redirect()->route('categories.index')->with('success', 'category deleted');
    }

}
