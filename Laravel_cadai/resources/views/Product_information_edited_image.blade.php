<!DOCTYPE html>
<html lang='ja'>

<head>
    <meta charset="utf-8">
    <title>ララベル自動販売機</title>
    <link href='../../../practice/css/reset.css' rel="stylesheet">
    <link href='../../../practice/css/app.css' rel="stylesheet">
</head>

<body>
    <header class="header">
        <h1>商品情報詳細画面</h1>
    </header>

    <main>

        @csrf
        <div class="list-from">
            <label class="label-color" for="name">商品情報</label>
            <thead>
                <table>
                    <tr class="color-main">

                        <th>商品情報ID</th>
                        <th>商品画像</th>
                        <th>商品名</th>
                        <th>メーカー</th>
                        <th>価格</th>
                        <th>在庫数</th>
                        <th>コメント</th>
                    </tr>
            </thead>
            <tbody>
                @foreach ($results as $result)
                <tr>
                    <th>{{ $result-> products.id}}</th>
                    <th>{{ $result->img_path}}</th>
                    <th>{{ $result->product_name}}</th>
                    <th>{{ $result->price}</th>
                    <th>{{ $result->stock}}</th>
                    <th>{{ $result->company_name}}</th>
                    <th>{{ $result->comment}}</th>
                </tr>
                @endforeach
            </tbody>

        </div>

        <button class="edit" type="button">編集</button>
        <button class="return-bottom" type="button">戻る</button>





    </main>

    <footer>
        <h2>自動販売機動作プログラム</h2>
    </footer>
</body>

</html>