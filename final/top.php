<?php session_start(); ?>
<?php require 'db-connect.php'; ?>
<?php $css = 'top.css'; ?>
<?php require 'header.php'; ?>
<p class="is-size-3">Movie Management</p>
<hr>
<form action="movie.php" method="post">
    <input type="submit" value="映画情報一覧"><br>
</form>

<p class="is-size-3">Management by category</p>
<hr>
<form action="categori.php" method="post">
    <input type="submit" value="カテゴリ一覧"><br>
</form>

<?php require 'footer.php'; ?>