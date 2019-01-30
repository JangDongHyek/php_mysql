<?php
$conn = mysqli_connect('localhost', 'root', '111111', 'opentutorials');
$sql = "
  INSERT INTO topic
    (title, description, created)
    VALUES(
        '{$_POST['title']}',
        '{$_POST['description']}',
        NOW()
      )
";
$result = mysqli_query($conn,$sql);
if($result === false) {
  echo 'error';
} else {
  echo 'succeed <a href="index.php">back</a>';
}
 ?>
