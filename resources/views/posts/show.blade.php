@extends('layouts.app')
@section('content')
<a href="{{url('/posts')}}" class="btn btn-default">Go Back</a>
<h1>{{$post->title}}</h1>

<div>
{{$post->body}}
</div>
<hr>
<small>Written on{{$post->created_at}}</small>
<hr>
<a href="{{url('/posts')}}/{{$post->id}}" class="btn btn-default">Edit</a>
@endsection