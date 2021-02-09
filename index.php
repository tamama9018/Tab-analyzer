<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tab-analyzer</title>
  </head>
  <body>
    <form class="neck" action="" method="post">
    <table>
      <th></th>
      <tr>
        <input type="radio" name="string1" value="100" checked>
        <input type="radio" name="string1" value="4">
        <input type="radio" name="string1" value="5">
        <input type="radio" name="string1" value="6">
        <input type="radio" name="string1" value="7">
        <input type="radio" name="string1" value="8">
      </tr>
      <br>
      <tr>
        <input type="radio" name="string2" value="101" checked>
        <input type="radio" name="string2" value="11">
        <input type="radio" name="string2" value="0">
        <input type="radio" name="string2" value="1">
        <input type="radio" name="string2" value="2">
        <input type="radio" name="string2" value="3">
      </tr>
      <br>
      <tr>
        <input type="radio" name="string3" value="102" checked>
        <input type="radio" name="string3" value="7">
        <input type="radio" name="string3" value="8">
        <input type="radio" name="string3" value="9">
        <input type="radio" name="string3" value="10">
        <input type="radio" name="string3" value="11">
      </tr>
      <br>
      <tr>
        <input type="radio" name="string4" value="103" checked>
        <input type="radio" name="string4" value="2">
        <input type="radio" name="string4" value="3">
        <input type="radio" name="string4" value="4">
        <input type="radio" name="string4" value="5">
        <input type="radio" name="string4" value="6">
      </tr>
      <br>
      <tr>
        <input type="radio" name="string5" value="104" checked>
        <input type="radio" name="string5" value="9">
        <input type="radio" name="string5" value="10">
        <input type="radio" name="string5" value="11">
        <input type="radio" name="string5" value="0">
        <input type="radio" name="string5" value="1">
      </tr>
      <br>
      <tr>
        <input type="radio" name="string6" value="105" checked>
        <input type="radio" name="string6" value="4">
        <input type="radio" name="string6" value="5">
        <input type="radio" name="string6" value="6">
        <input type="radio" name="string6" value="7">
        <input type="radio" name="string6" value="8">
      </tr>
    </table>
    <input type="submit" name="" value="Search">
    </form>
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
    $space = " ";

    $r =implode($space,$result);


       $command = "python src/main.py ${r}";
       putenv("PYTHONUTF8=1");
       exec($command, $output);
       foreach ($output as $o) {
         // code...
         print("$o");
       }

     ?>
  </body>
</html>
