<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!-- Bootstrap core CSS -->
    <link href={{ asset('css/bootstrap.min.css') }} rel="stylesheet">
    <title>Admin</title>
</head>
<body>
    <div class="container">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-3">Posts</h1>
            <p class="lead">Update or Delete Posts Here</p>
            <hr class="my-2">
        </div>
    </div>
    <div class="card-deck">
        @foreach($posts as $post)
        <div class="card">
            <img class="card-img-top" src="{{ Storage::url($post->img_url) }}" alt="">
            <div class="card-body">
                <h4 class="card-title">{{$post->title}}</h4>
                <p class="card-text">{{$post->desc}}</p>
                <form method="POST" action="admin/delete/post/{{$post->id}}" style="float : right">
                    @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal">Edit</button>
                     <div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Update Post</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
       <form method="POST" action="admin/edit/post/{{$post->id}}">
        @csrf
           <div class="form-group">
             <label for="">Title</label>
             <input type="text" name="title" id="" class="form-control" placeholder="Enter New Title" aria-describedby="helpId">
           </div>
           <div class="form-group">
             <label for="">Description</label>
             <input type="text" name="desc" id="" class="form-control" placeholder="Enter new Description" aria-describedby="helpId">
           </div>
           <button type="submit" class="btn btn-light" value="Submit">Submit</button>
       </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
            </div>
        </div>
        @endforeach
    </div> <br>
<div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-3">Comments</h1>
            <p class="lead">Update or Delete Comments Here</p>
            <hr class="my-2">
        </div>
    </div>
    </div>
     <div class="card-deck">
        @foreach($comments as $comment)
        <div class="card">
            <img class="card-img-top" src="{{ Storage::url($post->img_url) }}" alt="">
            <div class="card-body">
                <h4 class="card-title">{{$comment->post_id}}</h4>
                <p class="card-text">{{$comment->comment}}</p>
                <form method="POST" action="admin/delete/comment/{{$comment->id}}" style="float : right">
                    @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                    <button type="button" class="btn btn-warning" data-toggle="modal2" data-target="#myModal2">Edit</button>
                     <div class="modal2" id="myModal2">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Update Post</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
       <form method="POST" action="admin/edit/comment/{{$comment->id}}">
        @csrf
           <div class="form-group">
             <label for="">Comment</label>
             <input type="text" name="desc" id="" class="form-control" placeholder="Enter new Comment" aria-describedby="helpId">
           </div>
           <button type="submit" class="btn btn-dark" value="Submit">Submit</button>
       </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
            </div>
        </div>
        @endforeach
    </div> <br>
</body>
 <!-- Bootstrap core JavaScript -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script>
        $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
    </script>
</html>
