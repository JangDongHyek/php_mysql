<?php
$conn = mysqli_connect("localhost", "root", "111111", "opentutorials");
$sql = "
  INSERT INTO topic
    (title, description, created)
    VALUE(
        'Mysql',
        'Mysql is...',
        NOW()
      )";
$result = mysqli_query($conn,$sql);

if($result === false) {
    echo mysqli_error($conn);
}

 ?>
