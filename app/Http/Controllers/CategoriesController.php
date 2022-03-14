<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view("categories.index", compact('categories'));
    }

    public function create()
    {
        return view("categories.create");
    }

    public function store(Request $request)
    {
        $category = new Category();
        $category->name = $request->get('name');
        $category->save();

        return redirect()->route('categories.index');
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);

        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->name = $request->get('name');
        $category->save();

        return redirect()->route('categories.index');
    }

    public function delete(Request $request)
    {
        $category = Category::destroy($request->get('category_id'));

        return redirect()->route('categories.index');
    }
}
