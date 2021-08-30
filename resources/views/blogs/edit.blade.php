<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <title>Document</title>
</head>
<body>
<form action="/blogs/{{$blog->id}}" method="post">

    @method("put")

  <div class="form-group">
  @csrf
    <label for="exampleInputEmail1">Image</label>
    <input type="text" name="image" value="{{$blog->image}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Title</label>
    <input type="text" name="title" value="{{$blog->title}}" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Excerpt</label>
    <input type="text" name="excerpt" value="{{$blog->excerpt}}" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">post</label>
    <textarea name="post" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$blog->post}}</textarea>

  </div>
  
  <button type="submit" class="btn btn-primary">Update</button>
</form>
    
</body>
</html>