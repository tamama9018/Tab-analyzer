<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>tab-Check</title>
  </head>
  <body>
    <?php
      $string1 = $_POST['string1'];
      $string2 = $_POST['string2'];
      $string3 = $_POST['string3'];
      $string4 = $_POST['string4'];
      $string5 = $_POST['string5'];
      $string6 = $_POST['string6'];
     ?>
     <p>結果：<?php echo $string1,"、",$string2,"、",$string3,"、",$string4,"、"
     ,$string5,"、",$string6;?>
     </p>
  </body>
</html>
