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
        <h1>商品新規登録画面</h1>
    </header>

    <main>
        @csrf
        <div class="list-from">
            <label class="label-color" for="name">商品登録フォーム</label>

            <table>
                <thead>
                    <tr class="color-main">
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
                        <th><input type="text" id="new-register" name="new-register" required minlength="1" maxlength="8" size="10"></th>
                        <th><select name="makerName">
                                <option value="Coca-Cola">コカ・コーラ</option>
                                <option value="KIRIN">キリン</option>
                                <option value="cheerio">チェリオ</option>
                            </select></th>
                        <th><input type="text" id="price" name="price" required minlength="1" maxlength="8" size="10"></th>
                        <th><input type="text" id="stock" name="stock" required minlength="1" maxlength="8" size="10"></th>
                        <th><textarea name="text" id="comment"></textarea></th>
                        <th><input class="file" type="file"></th>
                    </tr>
                    @endforeach
                </tbody>

            </table>

            <button class="makerName-search" type="button">登録</button>
        </div>

        <button class="return-button" type="button">戻る</button>


    </main>



    <footer>
        <h2>自動販売機動作プログラム</h2>
    </footer>
</body>

</html>