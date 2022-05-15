<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    function index() {
        $categories = Category::all();

        return view('category.category', [
            'categories' => $categories
        ]);
    }

    function add() {
        return view('category.add.add_category');
    }

    function add_action(Request $request) {
        $category = new Category;
        $category->name = $request->name;
        $category->save();

        return redirect('/category');
    }

    function edit(Request $request) {
        $id = $request->route('id');
        $category = Category::where(['id' => $id]) -> get() -> first();
        return view('category.edit.edit_category', [
            'name' => $category -> name
        ]);
    }
}
