<!DOCTYPE html>
<html lang='ja'>

<head>
    <meta charset="utf-8">
    <title>ララベル自動販売機</title>
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('/css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/appp.css') }}">
</head>

<body>
    <header class="header">
        <h1>商品情報編集画面</h1>
        </h1>
    </header>

    <main>

        @csrf
        <div class="list-from">
            <label class="label-color" for="name">商品情報</label>
            <thead>
                <table>
                    <tr class="color-main">
                        <th>商品情報ID</th>
                        <th>商品名</th>
                        <th>メーカー</th>
                        <th>価格</th>
                        <th>在庫数</th>
                        <th>コメント</th>
                        <th>商品画像</th>
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
            </table>

        </div>


        <button class="return-bottom" type="button">戻る</button>





    </main>

    <footer>
        <h2>自動販売機動作プログラム</h2>
    </footer>
</body>

</html>