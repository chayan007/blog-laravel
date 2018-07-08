<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
     <div class="container">
         <form method="POST" action="insert" enctype="multipart/form-data">
             @csrf
             Title of Blog : <br>
            <input type="text" name="title"><br>
            Desc of Blog:<br>
            <input type="text" name="desc"><br>
            Image to the Blog:<br>
            <input type="file" name="image"><br>
            <input type="submit" value="submit">
         </form>
     </div>
</body>
</html>
