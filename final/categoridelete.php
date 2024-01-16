<?php require 'db-connect.php'; ?>
<?php $css = 'categoridelete.css'; ?>
<?php require 'header.php'; ?>
<?php
    $pdo = new PDO($connect, USER, PASS);
    $sql = $pdo->prepare('delete from genre where genreID = ?');
    if($sql->execute([$_POST['genreID']])){
        echo '<form action="categori.php">';
        echo '<p class="has-text-centered is-size-3 mt-6">削除に成功しました。</p>';
        echo '<div id="button">';
        echo '<input type="submit" value="カテゴリ一覧へ">';
        echo '</div>';
        echo '</form>';
    }else{
        echo '<form action="categori.php">';
        echo '<p class="has-text-centered is-size-3 mt-6">削除に失敗しました。</p>';
        echo '<div id="button">';
        echo '<input type="submit" value="カテゴリ一覧へ">';
        echo '</div>';
        echo '</form>';
    }
?>
<?php require 'footer.php'; ?>
