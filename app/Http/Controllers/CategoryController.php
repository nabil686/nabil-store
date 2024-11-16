<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
 public function create_category()
 {
    $allCategory=Category::paginate(5);
    return view('backend.pages.category-create',compact('allCategory'));
 }
 public function category_form()
 {
      $allCategory=Category::all();
      return view('backend.pages.category-form',compact('allCategory'));
 }

 public function category_store(Request $request)
 {
    Category::create
    ([
        'name'=>$request->cat_name,
        'parent_category'=>$request->parent_name,
        'description'=>$request->cat_description
        
    ]);
    return redirect()->route('create.category');
 }
  
}
