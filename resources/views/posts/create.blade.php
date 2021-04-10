@extends('layouts.app')
@section('content')
<h1>Create Post</h1>
<!-- Modal -->
@if(count($errors)>0)
   <div class="alert alert-danger">
<ul>
@foreach($errors->all() as $error)
<li> {{$error}}</li>
@endforeach
</ul>

   </div>
   @endif
   @if(\Session::has('success'))
      <div class="alert alert-success">
       <p>{{\Session::get('success')}}</p>
   </div>
   @endif
        <!--begin of form-->
        <form action="{{action('PostsController@store')}}" method="POST">
     {{csrf_field()}}
        <div class="modal-body">
  <div class="form-group">
    <label >Post Title</label>
    <input type="text" name="title" class="form-control">
  </div>
 <div class="form-group">
    <label >Post Body</label>
    <textarea class="form-control" name="body" rows="5"></textarea>
  </div>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </form> 
<!--end of form-->
@endsection