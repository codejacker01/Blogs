@extends('layouts.default')
@section('content')

<div class="row">
@foreach($blogs as $blog)
  <div class="card col-sm" style="width: 18rem;">
  <img class="card-img-top" src="{{$blog->image}}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{{$blog->title}}</h5>
    <p class="card-text">{{$blog->excerpt}}</p>
    <a href="/blogs/{{$blog->id}}" class="btn btn-primary">Read More</a>
  </div>
  </div>
  @endforeach
</div> 
@endsection

    
