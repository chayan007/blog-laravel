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
    @foreach ($comments as $comment)
    <
    @endforeach

    <form action="comment" method="POST">
        <input type="text" name="comment"/>
    </form>
@endforeach

</body>
</html>
