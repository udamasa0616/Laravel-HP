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
        <h1>商品一覧画面</h1>
    </header>

    <main>
        @csrf
        <div class="list-from">
            <label class="label-color" for="name">検索フォーム</label>

            <div class="contents">
                <label class="label-color" for="name">商品名</label>
                <input type="text" id="new-register" name="new-register" required minlength="1" maxlength="8" size="10">

                <label class="label-color" for="name">メーカー名</label>
                <select name="makerName">
                    <option value="Coca-Cola">コカ・コーラ</option>
                    <option value="KIRIN">キリン</option>
                    <option value="cheerio">チェリオ</option>
                </select>

                <button class="search" type="button">検索</button>
            </div>
        </div>

        <button class="new-register" type="button">新規</button>


        <<div class="list-from">
            <!-- <button class="edit" type="button">更新</button> -->
            <label class="label-color" for="name">商品情報</label>
            <table>
                <thead>
                    <tr class="color-main">

                        <th>ID</th>
                        <th>商品画像</th>
                        <th>商品名</th>
                        <th>価格</th>
                        <th>在庫数</th>
                        <th>メーカー名</th>
                        <th>詳細表示</th>
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



    </main>

    <footer>
        <h2>自動販売機動作プログラム</h2>
    </footer>
</body>

</html>