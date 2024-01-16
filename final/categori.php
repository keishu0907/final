<?php session_start(); ?>
<?php require 'db-connect.php'; ?>
<?php $css = 'categori.css'; ?>
<?php require 'header.php'; ?>

<p class="is-size-3">カテゴリ一覧</p>
<hr>
<form action="categoriaddition.php"  class="has-text-centered mb-6" method="post">
    <input type="submit" name="top" value="カテゴリ追加">
</form>
<div id="center">
<table class="table is-bordered">
    <tr>
        <th>ジャンルID</th>
        <th>ジャンル名</th>
    </tr>
    <?php
    $pdo = new PDO($connect, USER, PASS);
    
    foreach ($pdo->query('select * from genre') as $row) {
        
        echo '<tr>';
        echo '<td>', $row['genreID'], '</td>';
        echo '<td>', $row['name'], '</td>';
       
        
        echo '<td><form action="categoridelete.php" method="post">';
        echo '<input type="hidden" name="genreID" value="'.$row['genreID'].'">';
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