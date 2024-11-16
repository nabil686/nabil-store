@extends('backend.master')
@section('content')
<h1>Cretagory List</h1>
<a class="btn btn-primary"href="{{url('category-form')}}">Create Category</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Parent Category Name</th>
      <th scope="col">Category Parent</th>
      <th scope="col">Category Details</th>
      <th scope="col"> Status</th>
      <th scope="col"> Action</th>

    </tr>

  </thead>

  <tbody>
    @foreach($allCategory as $cat)
    <tr>
      <th scope="row">{{$cat->id}}</th>
      <td>{{$cat->name}}</td>
      <td>{{$cat->parent_category}}</td>
      <td>{{$cat->description}}</td>
      <td>{{$cat->status}}</td>

       <td>
        <a class="btn btn-primary" href="">View</a>
        <a class="btn btn-danger"href="">Edit</a>
        <a class="btn btn-warning"href="">Delete</a>

      </td>
    </tr>

   @endforeach
  </tbody>

</table>
{{$allCategory->links() }}

@endsection
