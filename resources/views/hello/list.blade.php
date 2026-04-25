<!doctype html>
<html lang=ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<table class="table">
<thread>
    <tr>
        <th>ISBNコード</th><th>署名</th><th>価格</th>
        <th>出版社</th><th>刊行日</th><th>サンプル</th>
    </tr>
</thread>
<tbody>
@foreach($books as $book)
    <tr>
        <td>{{$book->isbn}}</td>
        <td>{{$book->title}}</td>
        <td>{{$book->price}}</td>
        <td>{{$book->publisher}}</td>
        <td>{{$book->published}}</td>
        <td>{{$book->sample ? '○' : '×'}}</td>
    </tr>
@endforeach
</tbody>
</table>
</body>
</html>
