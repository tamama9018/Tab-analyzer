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
    $strings = [];
    $strings[] = (int)$string1;
    $strings[] = (int)$string2;
    $strings[] = (int)$string3;
    $strings[] = (int)$string4;
    $strings[] = (int)$string5;
    $strings[] = (int)$string6;

    $target = $strings;
    $result = array_diff($target, array('100','101','102','103','104','105'));
    $result = array_values($result);

   foreach ($result as $value) {
     // code...
    $v =  $value;
   }
var_dump($v);
echo $v;

       $command = "python \MAMP\htdocs\php7\src\main.py ${v}";
       exec($command, $output);
       foreach ($output as $o) {
         // code...
         print("$o");
       }

     ?>


  </body>
</html>
