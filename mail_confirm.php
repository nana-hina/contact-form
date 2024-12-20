<!doctype HTML>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>お問合わせフォームを作る</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<link rel="stylesheet" type="text/css" href="style2.css">
    <header>
        <h1>お問合わせ内容確認</h1>
    </header>

    <main>
        <div class="confirm">
            <br>お問合わせ内容はこちらで宜しいでしょうか？
            <br>よろしければ「送信する」ボタンを押して下さい。
        </div>

        <div><br>名前
        <?php echo $_POST['name'];?>
        </div>

        <div><br>メールアドレス
        <?php echo $_POST['mail'];?>
        </div>

        <div><br>年齢
        <?php echo $_POST['age']."歳";?>
        </div>

        <div><br>コメント
        <?php echo $_POST['comments'];?>
        </div>

        <div class="buttons">
            <form action="index.html">
                <input type="submit" class="button1" value="戻って修正する"/>
            </form>

            <form action="insert.php" method="post">
                <input type="submit" class="button2" value="送信する"/>
                <input type="hidden" value="<?php echo $_POST['name'];?>" name="name">
                <input type="hidden" value="<?php echo $_POST['mail'];?>" name="mail">
                <input type="hidden" value="<?php echo $_POST['age'];?>" name="age">
                <input type="hidden" value="<?php echo $_POST['comments'];?>" name="comments">
            </form>
        </div>
    </main>
</body>
</html>