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
<h1>商品情報編集画面</h1>
</h1>
</header>

<main>
    
<div class="list">
    <h2 class="title" >商品情報</h2>
<table>
    <tr class="color-main">
        
        <td>商品情報ID</td>
        <td>商品名</td>
        <td>メーカー</td>
        <td>価格</td>
        <td>在庫数</td>
        <td>コメント</td>
        <td>商品画像</td>
    </tr>
</table>
    <table>
    <tr class="color-main">
        @foreach ($articles as $a $article)
        <!-- <td>商品情報ID</td> -->
        <td>{{ $article->id }}</td>

        <!-- <td>商品画像</td> -->
        <td>{{ $article->title }}</td>

        <!-- <td>商品名</td> -->
        <td>{{ $article->title }}</td>

        <!-- <td>メーカー</td> -->
        <td>{{ $article->title }}</td>

        <!-- <td>価格</td> -->
        <td>{{ $article->title }}</td>
        
        <!-- <td>在庫数</td> -->
        <td>{{ $article->title }}</td>
        
        <!-- <td>コメント</td> -->
        <td>{{ $article->title }}</td>
    </tr>
    @endforeach

</table>
</div>


<button class="return-botton" type="button">戻る</button>





</main>

<footer>
    <h2>自動販売機動作プログラム</h2>
</footer>
</body>

</html>