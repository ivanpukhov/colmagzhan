<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    @foreach ($post as $item)
        <a href="{{ route('show.news', $item->id) }}">
            <h3> {{ $item->title }} </h3><br>
            <img src="{{ $item->href }}" style="height: 200px;" alt=""><br>
            {!! substr(strip_tags($item->text), 0, 450) !!}...<br>
        </a>
    @endforeach


    <div class="">

    </div>
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            {{ $post->links() }}
        </ul>
    </nav>

</body>

</html>
