<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>出品商品一覧</h1>
    <ul>
        <!-- リンク先をidで取得し名前で出力 -->
        @foreach ($items as $item)
            <li><a href="/items/{{ $item->id }}">{{ $item->name }}</a></li>
        @endforeach
    </ul>
    <a href="/items/create">出品する</a>
</body>

</html>