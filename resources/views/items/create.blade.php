<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    @if ($errors->any())
    <div class="error">
        <p>
            <b>{{ count($errors) }}けんのエラーがあります。</b>
        </p>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    </div>

    <h1>商品登録フォーム</h1>
    <form action="/items" method="post">
        @csrf
        <p>
            <label for="name">商品名</label>
            <input type="text" name="name" id="" value="{{ old('name') }}">
        </p>
        <p>
            <label for="name">商品詳細</label>
            <input type="text" name="description" id="" value="{{ old('description') }}">
        </p>
        <p>
            <label for="name">価格</label>
            <input type="number" name="price" id="" value="{{ old('price') }}">
        </p>
        <p>
            <label for="name">出品者</label>
            <input type="text" name="seller" id="" value="{{ old('seller') }}">
        </p>
        <p>
            <label for="name">電子メール</label>
            <input type="text" name="email" id="" value="{{ old('email') }}">
        </p>
        <p>
            <label for="name">商品画像URL</label>
            <input type="text" name="image_url" value="{{ old('image_url') }}">
        </p>

     <input type="submit" value="登録">
    </form>
</body>
</html>