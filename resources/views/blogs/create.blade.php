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
<form action="/blogs" method="post">
@csrf
<div class="form-group">
    <label for="exampleInputEmail1">image</label>
    <input name="image" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Excerpt</label>
    <textarea name="excerpt" class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Post</label>
    <textarea name="post" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</body>
</html>

