<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tab-analyzer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style media="screen">
    /*共通部分
    -------------------------------------*/
      .hidden{
        font-size: 0px;
      }
    /*header
    -------------------------------------*/
      header{
        margin: 10px;
      }
      header img{
        width:100px;
      }
      /*headerより下
      ------------------------------*/
      .neck-wrapper{
        /*display:flex;
        align-items: strech;*/

        position: relative;
        margin:0 auto; /*中央よせ*/
        width:800px; /*divの幅を決める*/
        padding-top:42px;
        text-align: center;
        height:100%;

      }
      .absolute{
        position: absolute;
        top:0px;
        z-index: 0;
        left:10.5%;
        width:620px;
        height:180px;

      }
      .neck-mobile{
        display:none;
      }
      .search{
        width:130px;
        margin: 0 auto;
        margin-top: 30px;
      }

/*ラジオボタンの装飾
-------------------------------------*/
      .my-radio {
        position: relative;
        /*display: block; /* 縦並びに */
        padding-left: 42px;
        cursor: pointer;
        user-select: none;
        z-index: 3;
        line-height: 15px;

      }
      label{

      }
      /* inputは非表示にする */
      .my-radio input {
        display: none;
      }
      /* 常に表示する枠線の円 */
      .radio-mark {
        position: absolute;
        top: 0; /* 上からの位置 */
        left: 0;
        height: 22px; /* 大きさ */
        width: 22px; /* 大きさ */
        border: solid 0px #d4dae2; /* 線 */
        border-radius: 50%;
        box-sizing: border-box;
      }
      /* 選択時に重ねる円 */
      .radio-mark:after {
        content: "";
        position: absolute;
        background: #6E8CD1; /* 色 */
        border-radius: 50%;
        top: 2px;
        bottom: 2px;
        left: 2px;
        right: 2px;
        opacity: 0; /* 透明にしておく */
      }
      /* 選択時に重ねた円の透明を解除 */
      .my-radio input:checked + .radio-mark:after {
        opacity: 1;
      }


/*スマホ
-------------------------------*/
  @media (max-width:800px) {
    body{
      text-align: center;

    }
    header img{
      width:100px;
    }
    header{
      border-bottom: solid;
    }
    .neck-wrapper{
      display:flex;
      align-items: stretch;/*ラジオボタンを縦にする*/
      position: relative;
     justify-content: center;/*ラジオボタンを中央よせ*/
     width:200px;/*divの幅を決める*/
     text-align: center;
     height:750px;
    }
    .absolute{
      display: none;
      position: absolute;
    }
    .neck-mobile{
      display: block;
      position: absolute;
      top:20px;
      z-index: 0;
      width:200px;
      left:13%;
      height:100%;
    }
  /*  .search{
    position: fixed;
    }

    .chord{
      display: block;
      margin-left: 300px;
    }*/

    /*ラジオボタンの装飾
    ----------------------*/
    .radio-mark{
      height: 26px; /* 大きさ */
      width: 26px;
    }
    .my-radio{
      display: block;
      position: relative;
      padding-left: 28px;
    }
    label{
      margin-bottom: 40px;
    }
/*弦の順番を左から6→1に変える
----------------------------*/
    .string1{
      order:6;
    }
    .string2{
      order:5;
    }
    .string3{
      order:4;
    }
    .string4{
      order:3;
    }
    .string5{
      order:2;
    }
    .string6{
      order:1;
    }
  }
    </style>
  </head>
  <body>
    <header>
      <img src="./images/Whatab.png" alt="logo">
   </header>
    <form class="neck" action="" method="post">
    <div class="neck-wrapper">
    <table >


          <?php
          $st1s = [101, 4, 5, 6, 7, 8, 9, 10, 11, 0, 1, 2, 3];
          $st2s = [102, 11, 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
          $st3s = [103, 7, 8, 9, 10, 11, 0, 1, 2, 3, 4, 5, 6];
          $st4s = [104, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 0, 1];
          $st5s = [105, 9, 10, 11, 0, 1, 2, 3, 4, 5, 6, 7, 8];
          $st6s = [106, 4, 5, 6, 7, 8, 9, 10, 11, 0, 1, 2, 3];
          ?>
          <tr>
            <div class="string1">
          <?php foreach ($st1s as $st1): ?>

           <?php if ($st1 > 100) {
           ?>

              <label class=my-radio>
              <input type=radio name=string1 value=<?php echo $st1;?> checked>
              <span class=radio-mark></span>
              <span class=hidden>1</span>
              </label>
          <?php
          }else{
          ?>
            <label class=my-radio>
            <input type=radio name=string1 value=<?php echo $st1;?> <?php if(isset($_POST['string1']) && $_POST['string1'] == $st1)echo 'checked'; ?>>
            <span class=radio-mark></span>
            <span class=hidden>1</span>
            </label>
            <?php
          }
          ?>
        <?php endforeach; ?>
      </div>
      </tr>


  <tr>
    <div class="string2">
      <?php foreach ($st2s as $st2): ?>

        <?php if ($st2 > 100) {
          ?>

          <label class=my-radio>
            <input type=radio name=string2 value=<?php echo $st2;?> checked>
            <span class=radio-mark></span>
            <span class=hidden>1</span>
          </label>
      <?php
        }else{
      ?>
      <label class=my-radio>
        <input type=radio name=string2 value=<?php echo $st2;?> <?php if(isset($_POST['string2']) && $_POST['string2'] == $st2)echo 'checked'; ?>>
        <span class=radio-mark></span>
        <span class=hidden>1</span>
      </label>
      <?php
        }
      ?>
    <?php endforeach; ?>
  </div>
</tr>

<tr>
  <div class="string3">
    <?php foreach ($st3s as $st3): ?>

      <?php if ($st3 > 100) {?>

        <label class=my-radio>
        <input type=radio name=string3 value=<?php echo $st3;?> checked>
        <span class=radio-mark></span>
        <span class=hidden>1</span>
        </label>
      <?php
        }else{
      ?>
      <label class=my-radio>
      <input type=radio name=string3 value=<?php echo $st3;?> <?php if(isset($_POST['string3']) && $_POST['string3'] == $st3)echo 'checked'; ?>>
      <span class=radio-mark></span>
      <span class=hidden>1</span>
      </label>
      <?php } ?>
    <?php endforeach; ?>
</div>
</tr>

<tr>
  <div class="string4">
<?php foreach ($st4s as $st4): ?>

 <?php if ($st4 > 100) {
 ?>

    <label class=my-radio>
    <input type=radio name=string4 value=<?php echo $st4;?> checked>
    <span class=radio-mark></span>
    <span class=hidden>1</span>
    </label>
<?php
}else{
?>
  <label class=my-radio>
  <input type=radio name=string4 value=<?php echo $st4;?> <?php if(isset($_POST['string4']) && $_POST['string4'] == $st4)echo 'checked'; ?>>
  <span class=radio-mark></span>
  <span class=hidden>1</span>
  </label>
  <?php
}
?>
<?php endforeach; ?>
</div>
</tr>

<tr>
  <div class="string5">
<?php foreach ($st5s as $st5): ?>

 <?php if ($st5 > 100) {
 ?>

    <label class=my-radio>
    <input type=radio name=string5 value=<?php echo $st5;?> checked>
    <span class=radio-mark></span>
    <span class=hidden>1</span>
    </label>
<?php
}else{
?>
  <label class=my-radio>
  <input type=radio name=string5 value=<?php echo $st5;?> <?php if(isset($_POST['string5']) && $_POST['string5'] == $st5)echo 'checked'; ?>>
  <span class=radio-mark></span>
  <span class=hidden>1</span>
  </label>
  <?php
}
?>
<?php endforeach; ?>
</div>
</tr>

<tr>
  <div class="string6">
<?php foreach ($st6s as $st6): ?>

 <?php if ($st6 > 100) {
 ?>

    <label class=my-radio>
    <input type=radio name=string6 value=<?php echo $st6;?> checked>
    <span class=radio-mark></span>
    <span class=hidden>1</span>
    </label>
<?php
}else{
?>
  <label class=my-radio>
  <input type=radio name=string6 value=<?php echo $st6;?> <?php if(isset($_POST['string6']) && $_POST['string6'] == $st6)echo 'checked'; ?>>
  <span class=radio-mark></span>
  <span class=hidden>1</span>
  </label>
  <?php
}
?>
<?php endforeach; ?>
</div>
</tr>


    </table>
    <img src="./images/neck.png" alt="" class="absolute">
    <img src="./images/neck_stand.png" alt="" class="neck-mobile">



  </div>
  <div class="search">
   <input type="image" name="" src="./images/search.png" class="search">
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
    $result = array_diff($target, array('101','102','103','104','105','106'));
    $result = array_values($result);
    $space = " ";

    $r =implode($space,$result);



   $command = "python src/main.py ${r}";
   putenv("PYTHONUTF8=1");
   exec($command, $output);
   foreach ($output as $o) {
     // code...
    $o = str_replace('[',' ',$o);
    $o = str_replace(']',' ',$o);
    $o = str_replace("'",'',$o);
     echo "<span class=chord>{$o}</span>";
   }


   ?>
     </div>
    </form>
  </body>
</html>
