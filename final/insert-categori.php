<?php require 'db-connect.php'; ?>
<?php $css = 'insert-categori.css'; ?>
<?php require 'header.php'; ?>
<?php
    $pdo = new PDO($connect, USER, PASS);
    $sql=$pdo->prepare('insert into genre values(null, ?)');
    if($sql->execute([$_POST['name']])){
        echo '<form action="categori.php">';
        echo '<p class="has-text-centered is-size-3 mt-6">追加に成功しました。</p>';
        echo '<div id="button">';
        echo '<input type="submit" value="カテゴリ一覧へ">';
        echo '</div>';
        echo '</form>';

    }else{
        echo '<form action="categoriaddition.php">';
        echo '<p class="has-text-centered is-size-3 mt-6">追加に失敗しました。</p>';
        echo '<div id="button">';
        echo '<input type="submit" value="カテゴリ追加画面へ">';
        echo '</div>';
        echo '</form>';
    }
?>
<?php require 'footer.php'; ?>