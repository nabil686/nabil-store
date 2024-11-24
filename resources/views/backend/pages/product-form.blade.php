@extends('backend.master')
@section('content')

<h1>Product Form</h1>
<form action="{{url('product-store')}}" method="post" enctype="multipart/form-data">

  @csrf

  <div class="form-group">
    <label for="p_name">Product Name</label>
    <input name="product_name" type="text" class="form-control" id="p_name" placeholder="Enter Product">

  </div>

  <div class="form-group">
    
  <label for="c_name">Category Name</label>
    <select name="category_name" id="c_name" class="form-control">
    <option value="">Select Category</option>
      @foreach($allCategory as $category)
      <option value="{{$category->id}}">{{$category->name}}</option>
      @endforeach
    </select>

  </div>

  <div class="form-group">
    <label for="p_price">Product Price</label>
    <input name="product_price" type="text" class="form-control" id="p_price" placeholder="Enter Price">

  </div>

  <div class="form-group">
    <label for="p_image">Product Image</label>
    <input name="product_image" type="file" class="form-control" id="p_image" placeholder="Upload image">

  </div>

   <button type="submit" class="btn btn-primary active">Submit</button>

</form>
@endsection