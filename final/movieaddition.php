<?php require 'db-connect.php'; ?>
<?php $css = 'movieaddition.css'; ?>
<?php require 'header.php'; ?>
<p class="is-size-3 mt-3">映画情報を入力してください</p>
<form action="insert-movie.php" class="has-text-centered mt-6" method="post">
    タイトル：<input type="text" name="Title"><br><br>
    リリース日：<input type="date" name="ReleaseDate"><br><br>
    ディレクター：<input type="text" name="Director"><br><br>
    評価：<input type="number" name="Rating"><br><br>
    <?php
    $pdo = new PDO($connect, USER, PASS);
    echo '<select name="genreID" require>';
    foreach($pdo->query('select * from genre') as $row){
        echo '<option value="',$row['genreID'],'">',$row['name'],'</option>';
    }
    echo '</select>';
    echo '<br><br>';
    ?>
    <input type="submit" value="追加">
</form>
<?php require 'footer.php'; ?>