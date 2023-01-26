<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body>

<div class="">
    <h1 class="">
        {{ $news->title }}</h1> <br>

    <div class="card" style="width: 58rem;">
        <img class="card-img-top" src="{{ $news->href }}" alt="Card image cap">
        <div class="card-body">
            <p class="">{{ $news->text }}</p>
        </div>
    </div>
</div>


</body>
</html>
