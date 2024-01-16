<?php session_start(); ?>
<?php require 'db-connect.php'; ?>
<?php $css = 'movie.css'; ?>
<?php require 'header.php'; ?>

<p class="is-size-3">映画情報一覧</p>
<hr>
<form action="movieaddition.php" method="post">
    <p class="has-text-centered"><input type="submit" value="映画情報追加">
</form>
<form action="movieupdate.php" class="has-text-centered mt-3 mb-3" method="post">
    <input type="submit" value="映画情報更新"></p>
</form>
<div id="center">
<table class="table is-bordered">
    <tr>
        <th>映画ID</th>
        <th>タイトル</th>
        <th>リリース日</th>
        <th>ディレクター</th>
        <th>評価</th>
        <th>ジャンルID</th>
    </tr>
    <?php
    $pdo = new PDO($connect, USER, PASS);
    
    foreach ($pdo->query('select * from Movies') as $row) {
        
        echo '<tr>';
        echo '<td>', $row['MovieID'], '</td>';
        echo '<td>', $row['Title'], '</td>';
        echo '<td>', $row['ReleaseDate'], '</td>';
        echo '<td>', $row['Director'], '</td>';
        echo '<td>', $row['Rating'], '</td>';
        echo '<td>', $row['genreID'], '</td>';
       
        
        echo '<td><form action="moviedelete.php" method="post">';
        echo '<input type="hidden" name="MovieID" value="'.$row['MovieID'].'">';
        echo '<input type="submit" name="del" value="削除">';
        echo '</form></td>';
        echo '</tr>';
    }

    ?>

</table>
</div>
<form action="top.php" class="has-text-centered mt-3" method="post">
    <input type="submit" name="top" value="トップへ">
</form>

</body>