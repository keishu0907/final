<?php require 'db-connect.php'; ?>
<?php $css = 'movieupdate.css'; ?>
<?php require 'header.php'; ?>
<table>
<tr>
<th><div class="th0">映画ID</div></th>
<th><div class="th1">タイトル</div></th>
<th><div class="th1">リリース日</div></th>
<th><div class="th1">ディレクター</div></th>
<th><div class="th1">評価</div></th>
<th><div class="th1">ジャンル</div></th>
</tr>
<?php
$pdo = new PDO($connect, USER, PASS);
foreach($pdo->query('select * from Movies') as $row){
    echo '<form action="movieupdate2.php" method="post">';
    echo '<tr>';
    echo '<input type="hidden" name="MovieID"  value="', $row['MovieID'], '">';
    echo '<td>';
    echo '<div class="th0">', $row['MovieID'], '</div>';
    echo '</td>';
    echo '<div class="td1">';
    echo '<td>';
    echo '<input type="text" name="Title" value="', $row['Title'], '">';
    echo '</td>';
    echo '</div>';
    echo '<div class="td1">';
    echo '<td>';
    echo '<input type="date" name="ReleaseDate" value="', $row['ReleaseDate'], '">';
    echo '</td>';
    echo '</div>';
    echo '<div class="td1">';
    echo '<td>';
    echo '<input type="text" name="Director" value="', $row['Director'], '">';
    echo '</td>';
    echo '</div>';
    echo '<div class="td1">';
    echo '<td>';
    echo '<input type="text" name="Rating" value="', $row['Rating'], '">';
    echo '</td>';
    echo '</div>';
    echo '<div class="td1">';
    echo '<td>';
    //echo '<select name="genreID">';
    //$id=$row['genreID'];
    //foreach($pdo->query('select * from genre') as $rowgenre){
        //$genreID=$rowgenre['genreID'];
        //if($id==$genreID){
            //echo '<option value="', $genreID, '" selected></option>';
        //}else{
        //echo '<option value="', $genreID, '"></option>';
        //}
    //}
    //echo '</select>';
    echo '<select name="genreID">';
    $id = $row['genreID'];

    $statement = $pdo->prepare('SELECT * FROM genre');
    $statement->execute();

    while ($rowgenre = $statement->fetch(PDO::FETCH_ASSOC)) {
        $genreID = $rowgenre['genreID'];
        $genreName = $rowgenre['name'];

        
        echo '<option value="', $genreID, '"';
        if ($id == $genreID) {
            echo ' selected';
        }
        echo '>', $genreName, '</option>';
    }

    echo '</select>';
    echo '</td>';
    echo '</div>';
    echo '<div class="td2">';
    echo '<td>';
    echo '<input type="submit" value="更新">';
    echo '</td>';
    echo '</div>';
    echo '</tr>';
    echo '</form>';
    echo "\n";
}
?>
</table>
<?php require 'footer.php'; ?>