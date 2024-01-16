<?php require 'db-connect.php'; ?>
<?php $css = 'moviedelete.css'; ?>
<?php require 'header.php'; ?>
<?php
    $pdo = new PDO($connect, USER, PASS);
    $sql = $pdo->prepare('delete from Movies where MovieId = ?');
    if($sql->execute([$_POST['MovieID']])){
        echo '<form action="movie.php">';
        echo '<p class="has-text-centered is-size-3 mt-3">削除に成功しました。</p>';
        echo '<div id="button">';
        echo '<input type="submit" value="映画情報一覧へ">';
        echo '</div>';
        echo '</form>';
    }else{
        echo '<form action="movie.php">';
        echo '削除に失敗しました。';
        echo '<input type="submit" value="映画情報一覧へ">';
        echo '</form>';
    }
?>
<?php require 'footer.php'; ?>