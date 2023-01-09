<?php
include  __DIR__ . '/../dbh.php';
include_once __DIR__ . '/functions.php';


  $im = "SELECT * FROM movies ORDER BY name ASC" ;
  $records = mysqli_query($conn,$im);


  $i=0;

  echo"<div class='row'>";
    while($result = mysqli_fetch_assoc($records)){
      echoMovie($result['name'], $result['imgpath'], $result['score'], $result['genre']);
      $i++;
    }
    echo"</div>";

    ?>
