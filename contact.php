<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>お問い合わせフォーム</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    <h2>お問い合わせフォーム</h2>
    </header>

    <div class="container">
    <aside>
    <ul>
        <li>
            <a href="#section1">トップページ</a>
        </li>
        <li>
            <a href="#section2">人気投稿</a>
        </li>
        <li>
            <a href="#section3">エンジニアおすすめ商品</a>
        </li>
        <li>
            <a href="#section4">エンジニアおすすめ記事</a>
        </li>
        <li>
            <a href="#section5">投稿ページ</a>
        </li>
    </ul>
    </aside>
    <main>
    <form id="contactForm" action="confirm.php" method="POST">
    <table border="3">
        <tr>
            <th>名前</th>
                <td>
                <input type="text" id="name" name="name" size="40">
                </td>
        </tr>

        <tr>
            <th>会社名</th>
                <td>
                <input type="text" id="companyName" name="companyName" size="40">
                </td>
        </tr>

        <tr>
            <th>メールアドレス</th>
            <td>
            <input type="email" id="email" name="email" size="40">
            </td>
        </tr>

        <tr>
            <th>年齢</th>
                <td>
                <input type="text" id="age" name="age" size="40">
                </td>
        </tr>

        <tr>
            <th>お問い合わせ内容</th>
            <td>
            <textarea id="message" name="message" rows="5" cols="40" placeholder="お問い合わせ内容"></textarea>
            </td>
        </tr>
    </table>

        <input type="submit" value="送信">
    </form>
    </main>
    </div>

<footer id="footer">
<p>横のボタンを押すとfooterの背景色が変わります。</p>
<button type="button" id="colorButton">押してみてね！</button>
</footer>

<script src="style.js"></script>
</body>
</html>