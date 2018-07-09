<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($posts as $post)
    <p>This is post {{ $post->id }}</p>
    <h1>{{ $post->title }}</h1>
    <p>Created at : {{ $post->created_at }}}</p>
    <br>
    <strong>{{ $post->desc }}</strong>
    <br>
    <p>Unique Slug is : {{ $post->slug }}</p>
    <img src="{{ Storage::url($post->img_url) }}" alt=""/>
    Comments :<br>
        <div class="card">
            <ul class="list-group list-group-flush">
                  @foreach ($comments as $comment)
                <li class="list-group-item">{{$comment->comment}}</li>
                <small>Commented by {{$comment->user_id}}</small>
                    @endforeach
            </ul>
        </div>

    <form action="comment" method="POST">
        <input type="text" name="comment"/>
    </form>
@endforeach

</body>
</html>
