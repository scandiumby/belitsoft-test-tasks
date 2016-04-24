<?php

include_once('Images.class.php');

//.. Images got from some source. Images included for demo manually.
$images[] = new  Image('add-img-link', 'img/image1.jpg', 'Image1');
$images[] = new  Image('add-img-link', 'img/image2.jpg', 'Image2');
$images[] = new  Image('add-img-link', '', 'Image3');
$images[] = new  Image('add-img-link', 'img/image4.jpg', 'Image4');

?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Задание 4 (PHP/JS)</title>
</head>
<body>
  <?php $images[0]->show_with_link(); ?>
  <p><?php $images[1]->show_with_link(); ?>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In fermentum ut leo eget posuere. Vivamus urna orci, elementum vitae neque quis, luctus tempor urna. Mauris luctus lorem sed odio tristique scelerisque. Ut ut sodales urna. Vestibulum fermentum gravida augue in venenatis. Donec auctor vitae elit sit amet pretium.</p>
  <?php $images[2]->show_with_link(); ?>
  <?php $images[3]->show_with_link(); ?>
</body>
</html>
