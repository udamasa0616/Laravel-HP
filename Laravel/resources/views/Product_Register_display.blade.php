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
                    <form action="{{ route('main') }}">
                        @csrf
                    <tbody>
                        
                        <tr>
                            <th><input type="text" id="new-register" name="new-register" required minlength="1" maxlength="8" size="10"></th>
                            @if($errors->has('product_name'))
                        <p>{{ $errors->first('product_name') }}</p>
                    @endif
                            <th>
                                
                                <select name="makerName">
                                    <option value="" selected disabled>選択してください</option>
                                    <option value="Coca-Cola">コカ・コーラ</option>
                                    <option value="KIRIN">キリン</option>
                                    <option value="cheerio">チェリオ</option>
                                    <option value="georgia">Georgia</option>
                                    <option value="sanngaria">サンガリア</option>
                                    <option value="kobeya">神戸屋</option>
                                </select>

                            <th>
                                <input type="text" id="price" name="price" required minlength="1" maxlength="8" size="10">
                                @if($errors->has('price'))
                        <p>{{ $errors->first('price') }}</p>
                    @endif
                            </th>

                            <th>
                                <input type="text" id="stock" name="stock" required minlength="1" maxlength="8" size="10">
                            @if($errors->has('stock'))
                        <p>{{ $errors->first('stock') }}</p>
                    @endif
                            </th>

                            <th>
                                <textarea name="text" id="comment"></textarea>
                            @if($errors->has('comment'))
                        <p>{{ $errors->first('comment') }}</p>
                    @endif
                            </th>

                            <th>
                                <input class="file" type="file">
                            @if($errors->has('file'))
                        <p>{{ $errors->first('file') }}</p>
                    @endif
                            </th>
                        </tr>
                    </tbody>

                </table>
                <button class="makerName-search" type="button">登録</button>
            </form>
            

        </div>

        <button class="return-button" type="button"><a href="{{ route('main') }}">戻る</a></button>


    </main>



    <footer>
        <h2>自動販売機動作プログラム</h2>
    </footer>
</body>

</html>