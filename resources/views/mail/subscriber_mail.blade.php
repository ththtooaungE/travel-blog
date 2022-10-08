<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>{{$blog->title}}</h1>
    <p>Comments of that post are updated!</p>
    <a href="http://127.0.0.1:8000/blogs/{{$blog->slug}}">Click here to see!</a>
</body>
</html>