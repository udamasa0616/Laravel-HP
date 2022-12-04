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
<h1>商品新規登録画面</h1>
</header>

<main>

<div class="list">

    <!-- <button class="edit" type="button">更新</button> -->
<label for="name">商品登録フォーム</label>
<table>
    <tr class="color-main">
        
        <td>商品名</td>
        <td>メーカー</td>
        <td>価格</td>
        <td>在庫数</td>
        <td>コメント</td>
        <td>商品画像</td>
    </tr>
    <tr>
        <td><input type="text" id="new-register" name="new-register" required minlength="1" maxlength="8" size="10"></td>
        <td><select name="makerName">
            <option value="Coca-Cola">コカ・コーラ</option>
            <option value="KIRIN">キリン</option>
            <option value="cheerio">チェリオ</option>
        </select></td>
        <td><input type="text" id="price" name="price" required minlength="1" maxlength="8" size="10"></td>
        <td><input type="text" id="stock" name="stock" required minlength="1" maxlength="8" size="10"></td>
        <td><textarea name="text" id="comment"></textarea></td>
        <td><input class="file" type="file"></td>

    </tr>
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