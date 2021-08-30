@extends('layouts.default')
@section('content')
<div class="container">
<div class="card mt-3">
  <div class="card-header">
  <h5 class="card-title">{{$blog->title}}</h5>{{$blog->created_at->format('d M Y') }}<div><a href="/blogs/{{$blog->id}}/edit" class="btn btn-outline-primary">Edit</a>
  </div></div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p class="card-text">{{$blog->post}}</p>
      <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
    </blockquote>
  </div>
</div>
</div>



<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirm</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <form action="/blogs/{{$blog->id}}" method="post">
@method("delete")
@csrf
<button type="submit" class="btn btn-outline-danger">Delete</button>
</form>
      </div>
    </div>
  </div>
</div>
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
  Delete Blog
</button>
@endsection
    


