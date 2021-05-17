<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Whatab</title>
    <script src="pianotest.js" charset="utf-8"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style media="screen">
    /*共通部分
    -------------------------------------*/
      body{
        font-family: "Segoe UI";
        background-color: #F5F5F5;
      }

      .hidden{
        font-size: 0px;
      }
      /*検索結果*/
      .chord{
        font-size: 16px;
        color:#EC5A1B;
        font-weight:bolder;
        font-weight: 500;

      }


    /*header
    -------------------------------------*/
      header{
        margin: 10px;

      }

      h1{
        padding:0;
        margin: 0;
        color:#6E8CD1;
        font-size: 36px;
        font-weight:500;
      }


      /*headerより下
      ------------------------------*/
      .neck{
        height:100%;
      }
      .neck-wrapper{
        position: relative;
        margin:0 auto; /*中央よせ*/
        width:800px; /*divの幅を決める*/
        padding-top:42px;
        text-align: center;
      }
      .table{
        border-spacing: 0;
      }
      .absolute{
        position: absolute;
        top:0;
        z-index: 0;
        left:10.5%;
        width:620px;
        height:180px;
      }
      .neck-mobile{
        display:none;
      }


      /*鍵盤
      -----------------------------*/
      .key{
        height:100%;
        display:flex;
        margin: 20px auto 0 auto;
        width:450px;
        justify-content: space-between;
        position: relative;
      }

      .flet{

        opacity: 10;
        margin: 0 auto;
        width:300px; /*divの幅を決める*/
       height:100px;
        text-align: center;
      }

      .string{
        position: absolute;
        opacity: 3;
        z-index: 5;
        width:300px;
        height: 100px;
        left:0;
      }
      .piano{
        position: absolute;
        opacity:3;
        z-index: 1;
        width:300px;
        height: 100px;
        left:0;
      }

      .search{
        width:130px;
        margin: 0 auto;
        padding-left: 20px;

      }
      .searchbtn{
        border-style: none;
        background-color: #EC5A1B;
        color:#F5F5F5;
        width:130px;
        padding: 8px;
        font-weight: bolder;
        font-size: 23px;
        border-radius: 100px;
      }


/*ラジオボタンの装飾
-------------------------------------*/
      .my-radio {
        position: relative;
        /*display: block; /* 縦並びに */
        width:22px;
        height:25px;
        cursor: pointer;
        user-select: none;
        z-index: 3;
        display: inline-block;
        text-align: center;
        margin-right:20px;
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
  @media (max-width:650px) {
    .conteinar{
      position: relative;
      margin: 0;
      padding: 0;
    }
    body{
      text-align: center;
      margin: 0;
      padding:0;
    }

    /*header
    -----------------*/
    header img{
      width:100px;
    }
    header{
      border-bottom: 3px solid #EC5A1B;
      background-color: #EC5A1B;
      margin:0;
    }
    h1{
      color:#F5F5F5;
    }
    /*headerより下
    -----------------*/
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
      height:790px;
      margin-top:7px;
    }
    .neck{
      padding-bottom: 80px;
    }

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
      width:0;
      height:26px;
      margin-right: 0px;
      margin-bottom: 34px;
    }

    /*鍵盤
    --------------*/
    .key{
     width:100%;
     position:fixed;
     bottom:0px;
     height:100px;
     background-color: #EC5A1B;
     padding-top:10px;
     margin: 0 auto;
     z-index: 10;
    }
    .piano-wrapper{
   position: relative;
      height:70px;
      margin: 0 auto;
    }
    .flet{
    width:200px;
    height: 70px;
    margin: 0 auto;
    background-color: #EC5A1B;

    }
    .piano{
     width:200px;
     height:70px;
    position: absolute;
    }
    .string{
    width:200px;
    height:70px;
    position: absolute;
    }
    .search{
      width:100px;
      padding-left: 0;
  margin:0 auto;
  border-radius: 40px;
    }
    .searchbtn{
    width:100px;
    background-color: #F5F5F5;
    color:#EC5A1B;
    }
    .chord{
    color:#F5F5F5;

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
  <body onload="putimg1(),putimg2(),putimg3(),putimg4(),putimg5(),putimg6()">
    <header>
      <h1>Whatab</h1>
   </header>
   <div class="conteinar">
   <div class="neck">
    <form class="neck" action="index.php" method="post">
    <div class="neck-wrapper">
    <table >


          <?php
          $st1s = [101, 5, 6, 7, 8, 9, 10, 11, 12, 1, 2, 3, 4];
          $st2s = [102, 12, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11];
          $st3s = [103, 8, 9, 10, 11, 12, 1, 2, 3, 4, 5, 6, 7];
          $st4s = [104, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 1, 2];
          $st5s = [105, 10, 11, 12, 1, 2, 3, 4, 5, 6, 7, 8, 9];
          $st6s = [106, 5, 6, 7, 8, 9, 10, 11, 12, 1, 2, 3, 4];
          ?>
          <tr>
            <div class="string1">
          <?php foreach ($st1s as $st1): ?>

           <?php if ($st1 > 100) {
           ?>

              <label class=my-radio>
              <input type=radio name=string1 onclick="muteimg1()" value=<?php echo $st1;?> checked>
              <span class=radio-mark></span>
              <span class=hidden>1</span>
              </label>
          <?php
          }else{
          ?>
            <label class=my-radio>
            <input type=radio name=string1 onclick="showimg1()" value=<?php echo $st1;?> <?php if(isset($_POST['string1']) && $_POST['string1'] == $st1)echo 'checked'; ?> >
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
            <input type=radio name=string2 onclick="muteimg2()" value=<?php echo $st2;?> checked>
            <span class=radio-mark></span>
            <span class=hidden>1</span>
          </label>
      <?php
        }else{
      ?>
      <label class=my-radio>
        <input type=radio name=string2 onclick="showimg2()" value=<?php echo $st2;?> <?php if(isset($_POST['string2']) && $_POST['string2'] == $st2)echo 'checked'; ?>>
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
        <input type=radio name=string3  onclick="muteimg3()" value=<?php echo $st3;?> checked>
        <span class=radio-mark></span>
        <span class=hidden>1</span>
        </label>
      <?php
        }else{
      ?>
      <label class=my-radio>
      <input type=radio name=string3 onclick="showimg3()" value=<?php echo $st3;?> <?php if(isset($_POST['string3']) && $_POST['string3'] == $st3)echo 'checked'; ?>>
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
    <input type=radio name=string4 onclick="muteimg4()" value=<?php echo $st4;?> checked>
    <span class=radio-mark></span>
    <span class=hidden>1</span>
    </label>
<?php
}else{
?>
  <label class=my-radio>
  <input type=radio name=string4 onclick="showimg4()" value=<?php echo $st4;?> <?php if(isset($_POST['string4']) && $_POST['string4'] == $st4)echo 'checked'; ?>>
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
    <input type=radio name=string5 onclick="muteimg5()" value=<?php echo $st5;?> checked>
    <span class=radio-mark></span>
    <span class=hidden>1</span>
    </label>
<?php
}else{
?>
  <label class=my-radio>
  <input type=radio name=string5 onclick="showimg5()" value=<?php echo $st5;?> <?php if(isset($_POST['string5']) && $_POST['string5'] == $st5)echo 'checked'; ?>>
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
    <input type=radio name=string6 onclick="muteimg6()" value=<?php echo $st6;?> checked>
    <span class=radio-mark></span>
    <span class=hidden>1</span>
    </label>
<?php
}else{
?>
  <label class=my-radio>
  <input type=radio name=string6 onclick="showimg6()" value=<?php echo $st6;?> <?php if(isset($_POST['string6']) && $_POST['string6'] == $st6)echo 'checked'; ?>>
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
  </div>
  <div class="key">
    <div class="piano-wrapper">
  <div class="flet">
    <img src="" name="area1" id="area1" class="string">
  <img src="" name="area2" id="area2" class="string">
  <img src="" name="area3" id="area3" class="string">
  <img src="" name="area4" id="area4" class="string">
  <img src="" name="area5" id="area5" class="string">
  <img src="" name="area6" id="area6" class="string">

  <img src="./images/piano.png" alt="piano" class="piano">
  </div>
</div>
  <div class="search">
   <button type="submit" class="searchbtn">What?</button>
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
    if($o== 0){
      echo " ";
    }else{
     echo "<span class=chord>{$o}</span>";
   }
   }

   ?>
     </div>
   </div>
 </div>
    </form>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js">
    </script>
    <script type="text/javascript">
    function putimg1(){
        radio = document.getElementsByName('string1')
        if(radio[1].checked){
          document.area1.src = "images/e.png";
        }else if (radio[2].checked) {
          document.area1.src = "images/f.png";
        }else if (radio[3].checked) {
          document.area1.src = "images/fs.png";
        }else if (radio[4].checked) {
          document.area1.src = "images/g.png";
        }else if (radio[5].checked) {
          document.area1.src = "images/gs.png";
        }else if (radio[6].checked) {
          document.area1.src = "images/a.png";
        }else if (radio[7].checked) {
          document.area1.src = "images/as.png";
        }else if (radio[8].checked) {
          document.area1.src = "images/b.png";
        }else if (radio[9].checked) {
          document.area1.src = "images/c.png";
        }else if (radio[10].checked) {
          document.area1.src = "images/cs.png";
        }else if (radio[11].checked) {
          document.area1.src = "images/d.png";
        }else if (radio[12].checked) {
          document.area1.src = "images/ds.png";
        }else if (radio[0].checked){
          document.area1.src = "images/mute.png";
        }
      }

      //string2
      function putimg2(){
        radio = document.getElementsByName('string2')
        if(radio[1].checked){
          document.area2.src = "images/b.png";
        }else if (radio[2].checked) {
          document.area2.src = "images/c.png";
        }else if (radio[3].checked) {
          document.area2.src = "images/cs.png";
        }else if (radio[4].checked) {
          document.area2.src = "images/d.png";
        }else if (radio[5].checked) {
          document.area2.src = "images/ds.png";
        }else if (radio[6].checked) {
          document.area2.src = "images/e.png";
        }else if (radio[7].checked) {
          document.area2.src = "images/f.png";
        }else if (radio[8].checked) {
          document.area2.src = "images/fs.png";
        }else if (radio[9].checked) {
          document.area2.src = "images/g.png";
        }else if (radio[10].checked) {
          document.area2.src = "images/gs.png";
        }else if (radio[11].checked) {
          document.area2.src = "images/a.png";
        }else if (radio[12].checked) {
          document.area2.src = "images/as.png";
        }else if (radio[0].checked){
          document.area2.src = "images/mute.png";
        }
      }
      //string3
      function putimg3(){
        radio = document.getElementsByName('string3')
        if(radio[1].checked){
          document.area3.src = "images/g.png";
        }else if (radio[2].checked) {
          document.area3.src = "images/gs.png";
        }else if (radio[3].checked) {
          document.area3.src = "images/a.png";
        }else if (radio[4].checked) {
          document.area3.src = "images/as.png";
        }else if (radio[5].checked) {
          document.area3.src = "images/b.png";
        }else if (radio[6].checked) {
          document.area3.src = "images/c.png";
        }else if (radio[7].checked) {
          document.area3.src = "images/cs.png";
        }else if (radio[8].checked) {
          document.area3.src = "images/d.png";
        }else if (radio[9].checked) {
          document.area3.src = "images/ds.png";
        }else if (radio[10].checked) {
          document.area3.src = "images/e.png";
        }else if (radio[11].checked) {
          document.area3.src = "images/f.png";
        }else if (radio[12].checked) {
          document.area3.src = "images/fs.png";
        }else if (radio[0].checked){
          document.area3.src = "images/mute.png";
        }
      }
      //string4
      function putimg4(){
        radio = document.getElementsByName('string4')
        if(radio[1].checked){
          document.area4.src = "images/d.png";
        }else if (radio[2].checked) {
          document.area4.src = "images/ds.png";
        }else if (radio[3].checked) {
          document.area4.src = "images/e.png";
        }else if (radio[4].checked) {
          document.area4.src = "images/f.png";
        }else if (radio[5].checked) {
          document.area4.src = "images/fs.png";
        }else if (radio[6].checked) {
          document.area4.src = "images/g.png";
        }else if (radio[7].checked) {
          document.area4.src = "images/gs.png";
        }else if (radio[8].checked) {
          document.area4.src = "images/a.png";
        }else if (radio[9].checked) {
          document.area4.src = "images/as.png";
        }else if (radio[10].checked) {
          document.area4.src = "images/b.png";
        }else if (radio[11].checked) {
          document.area4.src = "images/c.png";
        }else if (radio[12].checked) {
          document.area4.src = "images/cs.png";
        }else if (radio[0].checked){
          document.area4.src = "images/mute.png";
        }
      }
      //string5
      function putimg5(){
        radio = document.getElementsByName('string5')
        if(radio[1].checked){
          document.area5.src = "images/a.png";
        }else if (radio[2].checked) {
          document.area5.src = "images/as.png";
        }else if (radio[3].checked) {
          document.area5.src = "images/b.png";
        }else if (radio[4].checked) {
          document.area5.src = "images/c.png";
        }else if (radio[5].checked) {
          document.area5.src = "images/cs.png";
        }else if (radio[6].checked) {
          document.area5.src = "images/d.png";
        }else if (radio[7].checked) {
          document.area5.src = "images/ds.png";
        }else if (radio[8].checked) {
          document.area5.src = "images/e.png";
        }else if (radio[9].checked) {
          document.area5.src = "images/f.png";
        }else if (radio[10].checked) {
          document.area5.src = "images/fs.png";
        }else if (radio[11].checked) {
          document.area5.src = "images/g.png";
        }else if (radio[12].checked) {
          document.area5.src = "images/gs.png";
        }else if (radio[0].checked){
          document.area5.src = "images/mute.png";
        }
      }
      //string6
      function putimg6(){
        radio = document.getElementsByName('string6')
        if(radio[1].checked){
          document.area6.src = "images/e.png";
        }else if (radio[2].checked) {
          document.area6.src = "images/f.png";
        }else if (radio[3].checked) {
          document.area6.src = "images/fs.png";
        }else if (radio[4].checked) {
          document.area6.src = "images/g.png";
        }else if (radio[5].checked) {
          document.area6.src = "images/gs.png";
        }else if (radio[6].checked) {
          document.area6.src = "images/a.png";
        }else if (radio[7].checked) {
          document.area6.src = "images/as.png";
        }else if (radio[8].checked) {
          document.area6.src = "images/b.png";
        }else if (radio[9].checked) {
          document.area6.src = "images/c.png";
        }else if (radio[10].checked) {
          document.area6.src = "images/cs.png";
        }else if (radio[11].checked) {
          document.area6.src = "images/d.png";
        }else if (radio[12].checked) {
          document.area6.src = "images/ds.png";
        }else if (radio[0].checked){
          document.area6.src = "images/mute.png";
        }
      }

      $(function(){
        var nowchecked = $('input[name="string1"]:checked').val();
        $('input[name="string1"]').click(function(){
          if($(this).val() == nowchecked){
            $(this).prop('checked',false);
            $('input:radio[name="string1"]').val(["101"]);
            $('#area1').attr
            ('src', './images/mute.png');
            nowchecked = false;
          }else{
            nowchecked = $(this).val();
          }
        });
      });
      $(function(){
        var nowchecked = $('input[name="string2"]:checked').val();
        $('input[name="string2"]').click(function(){
          if($(this).val() == nowchecked){
            $(this).prop('checked',false);
            $('input:radio[name="string2"]').val(["102"]);
            $('#area2').attr
            ('src', './images/mute.png');
            nowchecked = false;
          }else{
            nowchecked = $(this).val();
          }
        });
      });
      $(function(){
        var nowchecked = $('input[name="string3"]:checked').val();
        $('input[name="string3"]').click(function(){
          if($(this).val() == nowchecked){
            $(this).prop('checked',false);
            $('input:radio[name="string3"]').val(["103"]);
            $('#area3').attr
            ('src', './images/mute.png');
            nowchecked = false;
          }else{
            nowchecked = $(this).val();
          }
        });
      });
      $(function(){
        var nowchecked = $('input[name="string4"]:checked').val();
        $('input[name="string4"]').click(function(){
          if($(this).val() == nowchecked){
            $(this).prop('checked',false);
            $('input:radio[name="string4"]').val(["104"]);
            $('#area4').attr
            ('src', './images/mute.png');
            nowchecked = false;
          }else{
            nowchecked = $(this).val();
          }
        });
      });
      $(function(){
        var nowchecked = $('input[name="string5"]:checked').val();
        $('input[name="string5"]').click(function(){
          if($(this).val() == nowchecked){
            $(this).prop('checked',false);
            $('input:radio[name="string5"]').val(["105"]);
            $('#area5').attr
            ('src', './images/mute.png');
            nowchecked = false;
          }else{
            nowchecked = $(this).val();
          }
        });
      });
      $(function(){
        var nowchecked = $('input[name="string6"]:checked').val();
        $('input[name="string6"]').click(function(){
          if($(this).val() == nowchecked){
            $(this).prop('checked',false);
            $('input:radio[name="string6"]').val(["106"]);
            $('#area6').attr
            ('src', './images/mute.png');
            nowchecked = false;
          }else{
            nowchecked = $(this).val();
          }
        });
      });

    </script>

  </body>
</html>
