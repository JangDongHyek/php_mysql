<?php
$conn = mysqli_connect(
  'localhost',
  'root',
  '111111',
  'opentutorials');
  $sql = "SELECT * FROM topic";
  $result = mysqli_query($conn,$sql);
  $list = '';
  while($row = mysqli_fetch_array($result)){
    $list = $list."<li><a href=\"index.php?id={$row['id']}\">{$row['title']}</a></li>";
  }

$article = array(
  'title'=>'Welcome',
  'description'=>'Hello, web'
);

$update_link = '';

if(isset($_GET['id'])) {
  $sql = "SELECT * FROM topic WHERE id = {$_GET['id']}";
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($result);
  $article['title'] = $row['title'];
  $article['description'] = $row['description'];
  $update_link = '<a href="update.php?id='.$_GET['id'].'">update</a>';
}
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>WEB</title>
  </head>
  <body>
    <h1><a href="index.php">WEB</a></h1>
    <ol>
        <?=$list?>
    </ol>
    <a href="create.php">create</a>
    <?=$update_link?>
    <h2><?=$article['title']?></h2>
    <?=$article['description']?>
  </body>
</html>
