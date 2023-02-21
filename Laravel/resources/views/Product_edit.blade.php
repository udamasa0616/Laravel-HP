<!DOCTYPE html>
<html lang='ja'>

<head>
    <meta charset="utf-8">
    <title>ララベル自動販売機</title>
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('/css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/appp.css') }}">
    <!-- js -->
    <script src="{{ asset('/js/jquery-3.1.1.min.js') }}"></script>

    <!-- img -->
    <img alt="ロゴ" src="{{ asset('/img/logo.png') }}">

</head>

<body>
    <header class="header">
        <h1>商品情報編集画面</h1>
    </header>

    <main>
        @csrf

        <div class="list-from">
            <!-- <button class="edit" type="button">更新</button> -->
            <label class="label-color" for="name">商品情報</label>
            <table>
                <thead>
                    <tr class="color-main">
                        <th>ID</th>
                        <th>商品名</th>
                        <th>メーカー名</th>
                        <th>価格</th>
                        <th>在庫数</th>
                        <th>コメント</th>
                        <th>商品画像</th>
                        
                    </tr>
                </thead>

                
                <form  method="post" action="{{ route('product_update', ['id'=>$product->products_id])}}" >
                        @csrf
                    <tbody>
                        
                        <tr>
                            <th>
                                <input value="{{ old($product->product_name ) }}" type="text" id="new-register" name="product_name" required minlength="1" maxlength="8" size="10"></th>
                                    @if($errors->has('product_name'))
                                        <p>{{ $errors->first('product_name') }}</p>
                                @endif
                            <th>
                                <select value="{{ old($product->company_id ) }}" name="makerName">
                                    <option  selected='disabled'>選択してください</option>
                                    <option  value="EAST" @if(1 === (int)old('makerName')) selected @endif >EAST</option> 
                                    <option  value="WEST" @if(2 === (int)old('makerName')) selected @endif >WEST</option>
                                    <option  value="Group" @if(3 === (int)old('makerName')) selected @endif >Group</option>
                                </select>

                            <th>
                                <input value="{{ old($product->price) }}" type="text" id="price" name="price" required minlength="1" maxlength="8" size="10">
                                    @if($errors->has('price'))
                                        <p>{{ $errors->first('price') }}</p>
                                    @endif
                            </th>

                            <th>
                                <input value="{{ old($product->stock) }}" type="text" id="stock" name="stock" required minlength="1" maxlength="8" size="10">
                                    @if($errors->has('stock'))
                                        <p>{{ $errors->first('stock') }}</p>
                                    @endif
                            </th>

                            <th>
                                <textarea name="comment" id="comment">{{ old('$product->comment') }}</textarea>
                                    @if($errors->has('comment'))
                                        <p>{{ $errors->first('comment') }}</p>
                                    @endif
                            </th>

                            <th>
                                <input name='img_path' value="{{ old('$product->img_path') }}" class="img_path" type="file">
                                    @if($errors->has('img_path'))
                                        <p>{{ $errors->first('img_path') }}</p>
                                    @endif
                            </th>
                        </tr>
                    </tbody>

                </table>

                    <input type="submit" class="makerName-search" id="" value="更新" >
                    
            </form>('PATCH')
            

        </div>

        <button class="return-button" type="button"><a href="{{ route('show', ['id'=>$product->id]) }}">戻る</a></button>
        </div>



    </main>

    <footer>
        <h2>自動販売機動作プログラム</h2>
    </footer>
</body>

</html>