<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //

    
    public function index()
    {
        $contacts = Category::all();

        return view('category.index', compact('category'));
    }
    
    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            
        ]);

        $category = new Category([
            'name' => $request->get('name'),
            
        ]);
        $category->save();
        return redirect('/category')->with('success', 'Category saved!');
    }




    public function create(){
    return view('category.create');}
}
