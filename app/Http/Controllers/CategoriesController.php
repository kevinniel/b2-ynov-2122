<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Soft;

class CategoriesController extends Controller
{
    public function index()
    {

        // $softs = Soft::all();
        // dd($softs);
        // dd($softs->category);
        // dd($softs->category->name);


        // relations dans les vues connue : 
        // 2 requetes SQL
        // 1 => select * from softs
        // 2 => select * from categories WHERE id IN [1, 2, 3, 4, 5]
        // $softs = Soft::with('category')->get();
        // dd($softs[0]);

        // relation inverse
        // $categories = Category::with('softs')->get();

        // dd($categories);



        $categories = Category::with('softs')->get();

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
