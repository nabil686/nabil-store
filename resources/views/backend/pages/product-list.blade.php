@extends('backend.master')
@section('content')

<h1>Product List</h1>
<a class="btn btn-primary"href="{{url('product-form')}}">Create Product</a>

<table class="table">
   <thead>

      <tr>
           <th scope="col">#</th>
           <th scope="col">Product Name</th>
           <th scope="col">Category Name</th>
           <th scope="col">Product Price </th>
           <th scope="col">Product Image</th>
           <th scope="col">Action </th>

      </tr>

   </thead>

   <tbody>
      <tr>
         @foreach($allProduct as $product)
         <th scope="row">{{$product->id}}</th>
         <td>{{$product->product_name}}</td>
         <td>{{$product->category_name}}</td>
         <td>{{$product->product_price}}</td>
          <td>
             <img src="{{url('/uploads/uploads/'.$product->product_image)}}" alt="p_image" height="50px" width="50px">
         </td>

          <td>
                <a class="btn btn-primary" href="">View</a>
                <a class="btn btn-danger"href="">Edit</a>
                <a class="btn btn-info"href="">Delete</a>
           
         </td>
         


      </tr>
      @endforeach

   </tbody>

</table>
{{$allProduct->links() }}
@endsection