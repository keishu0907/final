<?php require 'db-connect.php'; ?>
<?php $css = 'insert-movie.css'; ?>
<?php require 'header.php'; ?>
<?php
    $pdo = new PDO($connect, USER, PASS);
    $sql=$pdo->prepare('insert into Movies values(null, ?, ?, ?, ?, ?)');
    if($sql->execute([$_POST['Title'],$_POST['ReleaseDate'],$_POST['Director'],$_POST['Rating'],$_POST['genreID']])){
        echo '<form action="movie.php">';
        echo '<p class="has-text-centered is-size-3 mt-3">追加に成功しました。</p>';
        echo '<div id="button">';
        echo '<input type="submit" value="映画情報一覧へ">';
        echo '</div>';
        echo '</form>';

    }else{
        echo '<form action="movieaddition.php">';
        echo '<p class="has-text-centered is-size-3 mt-3">追加に失敗しました。</p>';
        echo '<div id="button">';
        echo '<input type="submit" value="映画情報入力画面へ">';
        echo '</div>';
        echo '</form>';
    }
?>
<?php require 'footer.php'; ?>