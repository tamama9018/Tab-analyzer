<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tab-analyzer</title>
  </head>
  <body>
    <form class="neck" action="" method="post">
    <table >
      <th></th>
      <tr>
        <input type="radio" name="string1" value="100" checked <?php if(isset($_POST['string1']) && $_POST['string1'] == "100")echo 'checked'; ?>>
        <input type="radio" name="string1" value="4"<?php if(isset($_POST['string1']) && $_POST['string1'] == "4")echo 'checked'; ?>>
        <input type="radio" name="string1" value="5"<?php if(isset($_POST['string1']) && $_POST['string1'] == "5")echo 'checked'; ?>>
        <input type="radio" name="string1" value="6"<?php if(isset($_POST['string1']) && $_POST['string1'] == "6")echo 'checked'; ?>>
        <input type="radio" name="string1" value="7"<?php if(isset($_POST['string1']) && $_POST['string1'] == "7")echo 'checked'; ?>>
        <input type="radio" name="string1" value="8"<?php if(isset($_POST['string1']) && $_POST['string1'] == "8")echo 'checked'; ?>>
      </tr>
      <br>
      <tr>
        <input type="radio" name="string2" value="101" checked<?php if(isset($_POST['string2']) && $_POST['string2'] == "101")echo 'checked'; ?>>
        <input type="radio" name="string2" value="11" <?php if(isset($_POST['string2']) && $_POST['string2'] == "11")echo 'checked'; ?>>
        <input type="radio" name="string2" value="0" <?php if(isset($_POST['string2']) && $_POST['string2'] == "0")echo 'checked'; ?>>
        <input type="radio" name="string2" value="1" <?php if(isset($_POST['string2']) && $_POST['string2'] == "1")echo 'checked'; ?>>
        <input type="radio" name="string2" value="2" <?php if(isset($_POST['string2']) && $_POST['string2'] == "2")echo 'checked'; ?>>
        <input type="radio" name="string2" value="3" <?php if(isset($_POST['string2']) && $_POST['string2'] == "3")echo 'checked'; ?>>
      </tr>
      <br>
      <tr>
        <input type="radio" name="string3" value="102" checked <?php if(isset($_POST['string3']) && $_POST['string3'] == "102")echo 'checked'; ?>>
        <input type="radio" name="string3" value="7" <?php if(isset($_POST['string3']) && $_POST['string3'] == "7")echo 'checked'; ?>>
        <input type="radio" name="string3" value="8" <?php if(isset($_POST['string3']) && $_POST['string3'] == "8")echo 'checked'; ?>>
        <input type="radio" name="string3" value="9" <?php if(isset($_POST['string3']) && $_POST['string3'] == "9")echo 'checked'; ?>>
        <input type="radio" name="string3" value="10" <?php if(isset($_POST['string3']) && $_POST['string3'] == "10")echo 'checked'; ?>>
        <input type="radio" name="string3" value="11" <?php if(isset($_POST['string3']) && $_POST['string3'] == "11")echo 'checked'; ?>>
      </tr>
      <br>
      <tr>
        <input type="radio" name="string4" value="103" checked <?php if(isset($_POST['string4']) && $_POST['string4'] == "103")echo 'checked'; ?>>
        <input type="radio" name="string4" value="2" <?php if(isset($_POST['string4']) && $_POST['string4'] == "2")echo 'checked'; ?>>
        <input type="radio" name="string4" value="3" <?php if(isset($_POST['string4']) && $_POST['string4'] == "3")echo 'checked'; ?>>
        <input type="radio" name="string4" value="4" <?php if(isset($_POST['string4']) && $_POST['string4'] == "4")echo 'checked'; ?>>
        <input type="radio" name="string4" value="5" <?php if(isset($_POST['string4']) && $_POST['string4'] == "5")echo 'checked'; ?>>
        <input type="radio" name="string4" value="6" <?php if(isset($_POST['string4']) && $_POST['string4'] == "6")echo 'checked'; ?>>
      </tr>
      <br>
      <tr>
        <input type="radio" name="string5" value="104" checked <?php if(isset($_POST['string5']) && $_POST['string5'] == "104")echo 'checked'; ?>>
        <input type="radio" name="string5" value="9" <?php if(isset($_POST['string5']) && $_POST['string5'] == "9")echo 'checked'; ?>>
        <input type="radio" name="string5" value="10" <?php if(isset($_POST['string5']) && $_POST['string5'] == "10")echo 'checked'; ?>>
        <input type="radio" name="string5" value="11" <?php if(isset($_POST['string5']) && $_POST['string5'] == "11")echo 'checked'; ?>>
        <input type="radio" name="string5" value="0" <?php if(isset($_POST['string5']) && $_POST['string5'] == "0")echo 'checked'; ?>>
        <input type="radio" name="string5" value="1" <?php if(isset($_POST['string5']) && $_POST['string5'] == "1")echo 'checked'; ?>>
      </tr>
      <br>
      <tr>
        <input type="radio" name="string6" value="105" checked <?php if(isset($_POST['string6']) && $_POST['string6'] == "105")echo 'checked'; ?>>
        <input type="radio" name="string6" value="4" <?php if(isset($_POST['string6']) && $_POST['string6'] == "4")echo 'checked'; ?>>
        <input type="radio" name="string6" value="5" <?php if(isset($_POST['string6']) && $_POST['string6'] == "5")echo 'checked'; ?>>
        <input type="radio" name="string6" value="6" <?php if(isset($_POST['string6']) && $_POST['string6'] == "6")echo 'checked'; ?>>
        <input type="radio" name="string6" value="7" <?php if(isset($_POST['string6']) && $_POST['string6'] == "7")echo 'checked'; ?>>
        <input type="radio" name="string6" value="8" <?php if(isset($_POST['string6']) && $_POST['string6'] == "8")echo 'checked'; ?>>
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
