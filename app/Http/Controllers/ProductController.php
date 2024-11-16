<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function productList()
    {
      $allProduct=Product::paginate(5);
      return view('backend.pages.product-list',compact('allProduct'));
    }
    public function productForm()
    {
        $allCategory=Category::all();
        return view('backend.pages.product-form',compact('allCategory'));
       
    }

    
    public function productStore(Request $request)
    {
      //  dd($request->all());
      $fileName=null;
      if($request->hasFile('product_image'))
      {
        $file=$request->file('product_image');
        $fileName=date('Ymdhis'). '.' .$file->getClientOriginalExtension();
        $file->storeAs('/uploads',$fileName);
      }
      Product::create([
        'product_name'=>$request->product_name,
        'category_name'=>$request->category_name,
        'product_price'=>$request->product_price,
        'product_image'=>$fileName

      ]);
      return redirect()->route('product.list');
   
    }

}
