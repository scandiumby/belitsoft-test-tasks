<?php
$title = 'Через 3 секунд Вы будете перенаправлены на result.html.';
?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title><?php echo $title; ?></title>
</head>
<body>
  <h1><?php echo $title; ?></h1>
</body>
</html>


<script type="text/javascript">
  setTimeout("document.location.href='result.html'", 3000);
</script>
