<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!-- Bootstrap core CSS -->
    <link href={{ asset('css/bootstrap.min.css') }} rel="stylesheet">
    <title>{{$post->slug}}</title>
</head>
<body>
   <div class="container">
        <div class="card">
  <div class="card-header"> Created at {{$post->created_at}}</div>
  <div class="card-body">
    <h5 class="card-title">{{$post->title}} </h5>
    <p class="card-text">{{$post->desc}}</p>
    <a href="{{$post->user_id}}" class="btn btn-primary">Check Posts by this User</a>
    @foreach ($comments as $comment)
    <div class="card">
  <div class="card-header">
    Quote
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p>{{$comment->comment}}</p>
      <footer class="blockquote-footer">Commented by <cite title="Source Title">{{$comment->user_id}}</cite></footer>
    </blockquote>
  </div>
</div>
    @endforeach
    <form method="POST" action="{{$post->id}}">
        @csrf
    <div class="form-group">
      <label for="">Post a Comment</label>
      <input type="text" class="form-control" name="comment" aria-describedby="helpId" placeholder="Write your Comment here">
      <small id="helpId" class="form-text text-muted">You can write anything</small>
      <button type="submit" class="btn btn-dark" value="Submit">Submit</button>
    </div>
    </form>
  </div>
</div>
   </div>
</body>
</html>
