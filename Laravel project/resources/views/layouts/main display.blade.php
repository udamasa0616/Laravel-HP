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
<div class="list-from">
<label class="label-color" for="name">検索フォーム</label>
<div class="contents" >
<h2>商品名</h2>
<input type="text" id="new-register" name="new-register" required minlength="1" maxlength="8" size="10">
<h2>メーカー</h2>
<select name="makerName">
<option value="Coca-Cola">コカ・コーラ</option>
<option value="KIRIN">キリン</option>
<option value="cheerio">チェリオ</option>
</select>

<button class="search" type="button">検索</button>
</div>
</div>

<button class="new-register" type="button">新規</button>


<div class="list">
<h2>商品情報</h2>
<table>
    <tr class="color-main">

        <td>ID</td>
        <td>商品画像</td>
        <td>商品名</td>
        <td>価格</td>
        <td>在庫数</td>
        <td>メーカー名</td>
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



</main>

<footer>
    <h2>自動販売機動作プログラム</h2>
</footer>
</body>

</html>