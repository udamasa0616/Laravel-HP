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
                    <form action="{{ route('register') }}" method='post'>
                        @csrf

                    <tbody>
                        
                        <tr>
                            <th>
                                <input value="{{ old('product_name') }}" type="text" id="new-register" name="product_name" required minlength="1" maxlength="8" size="10"></th>
                                    @if($errors->has('product_name'))
                                        <p>{{ $errors->first('product_name') }}</p>
                                @endif
                            <th>
                                
                                <select name="makerName">
                                    <option value="select" selected disabled>選択してください</option>
                                    <option type="text" value="1" @if(1 === (int)old('makerName')) selected @endif >コカ・コーラ</option>
                                    <option type="text" value="2" @if(2 === (int)old('makerName')) selected @endif >チェリオ</option>
                                    <option type="text" value="3" @if(3 === (int)old('makerName')) selected @endif >Georgia</option>
                                    <option type="text" value="4" @if(4 === (int)old('makerName')) selected @endif >サンガリア</option>
                                    <option type="text" value="5" @if(5 === (int)old('makerName')) selected @endif >神戸屋</option>
                                </select>

                            <th>
                                <input value="{{ old('price') }}" type="text" id="price" name="price" required minlength="1" maxlength="8" size="10">
                                    @if($errors->has('price'))
                                        <p>{{ $errors->first('price') }}</p>
                                    @endif
                            </th>

                            <th>
                                <input value="{{ old('stock') }}" type="text" id="stock" name="stock" required minlength="1" maxlength="8" size="10">
                                    @if($errors->has('stock'))
                                        <p>{{ $errors->first('stock') }}</p>
                                    @endif
                            </th>

                            <th>
                                <textarea value="{{ old('comment') }}" name="text" id="comment"></textarea>
                                    @if($errors->has('comment'))
                                        <p>{{ $errors->first('comment') }}</p>
                                    @endif
                            </th>

                            <th>
                                <input value="{{ old('file') }}" class="file" type="file">
                                    @if($errors->has('file'))
                                        <p>{{ $errors->first('file') }}</p>
                                    @endif
                            </th>
                        </tr>
                    </tbody>

                </table>

                    <input type="submit" class="makerName-search" value="登録" >
                    
            </form>
            

        </div>

        <button class="return-button" type="button"><a href="{{ route('main') }}">戻る</a></button>


    </main>



    <footer>
        <h2>自動販売機動作プログラム</h2>
    </footer>
</body>

</html>