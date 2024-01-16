<?php require 'db-connect.php'; ?>
<?php $css = 'categoriaddition.css'; ?>
<?php require 'header.php'; ?>
<p class="is-size-3 has-text-centered mt-6">カテゴリ情報を入力してください</p>
<form action="insert-categori.php" class="has-text-centered mt-6" method="post">
    ジャンル名：<input type="text" name="name">
    <input type="submit" value="追加">
</form>
<?php require 'footer.php'; ?>