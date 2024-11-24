@extends('backend.master')
@section('content')
<h1>Category Form</h1>

<form action="{{url('category-store')}}" method="post" enctype="multipart/form-data">
   @csrf
  
   <div class="form-group">
      <label for="name">Category Name</label>
      <input name="cat_name" type="text" required class="form-control" id="name" placeholder="Enter category">
   </div>

      <div>

      <label for="name">Category Parent Name</label>

         <select name="parent_name" id="name" class="form-control">
         <option value="">Parent Name</option>
          @foreach($allCategory as $cat)
          <option value="{{$cat->id}}">{{$cat->name}}</option>
          @endforeach
         </select>

      </div>
       


   <div class="form-group">
      <label for="name">Category Description</label>
      <input name="cat_description" type="text" required class="form-control" id="name" placeholder="Enter description">
   </div>

   <button type="submit" class="btn btn-success active">submit</button>

</form>

@endsection