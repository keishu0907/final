<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>
<?php
$pdo = new PDO($connect, USER, PASS);
$sql=$pdo->prepare('update Movies set Title=?, ReleaseDate=?, Director=?, Rating=?, genreID=? where MovieID=?');
if(empty($_POST['Title'])){
    echo 'タイトル名を入力してください。';
    echo '<form action="movieupdate.php" method="post">';
    echo '<input type="submit" value="更新画面へ">';
    echo '</form>';
}else if(empty($_POST['Director'])){
    echo 'ディレクター名を入力してください。';
    echo '<form action="movieupdate.php" method="post">';
    echo '<input type="submit" value="更新画面へ">';
    echo '</form>';
}else if(empty($_POST['Rating'])){
    echo '評価を数値で入力してください。';
    echo '<form action="movieupdate.php" method="post">';
    echo '<input type="submit" value="更新画面へ">';
    echo '</form>';
}else if($sql->execute([htmlspecialchars($_POST['Title']), $_POST['ReleaseDate'],$_POST['Director'],$_POST['Rating'],$_POST['genreID'],$_POST['MovieID']])){
    echo '<p class="has-text-centered is-size-3 mt-6">更新に成功しました。</p>';
}else{
    echo '<p class="has-text-centered is-size-3 mt-6">更新に失敗しました。</p>';
}
?>
<?php require 'footer.php'; ?>