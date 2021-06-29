<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Whatab</title>
    <script src="pianotest.js" charset="utf-8"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" href="CSS/main.css">
  </head>
  <body onload="putimg1(),putimg2(),putimg3(),putimg4(),putimg5(),putimg6()">
    <header>
      <h1>Whatab</h1>
   </header>
   <div class="conteinar">
     <div class="answer" id="app"  v-bind:class="{compact: scrollY > 50}">
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
          echo "<span class='chord'>{$o}</span>";
        }
        }

        ?>
     </div>



   <div class="neck">
     <div id="modal">
       <button type="button" @click="openModal">Manual</button>
     <open-modal v-show="showContent" @close="showContent = false"></open-modal>
   </div>


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
    <div class="buttons">
    <a href="index.php" onclick="muteSet()" class="mute-button">MUTE</a>
    </div>


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


     </div>
   </div>
 </div>
 <center>
  <div class="sosyal">
    <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwhatab.herokuapp.com" class="facebook">Facebook</a>
    <a href="https://twitter.com/intent/tweet?url=https%3A%2F%2Fwhatab.herokuapp.com" class="twitter">Twitter</a>

    </div>
</center>

    </form>


    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.13/dist/vue.js"></script>
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

      $(function muteSet(){
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


    new Vue({
      el: '#app',
      data:{
        scrollY:0,
        timer:null
      },
      created:function(){
        window.addEventListener('scroll', this.handleScroll)
      },
      beforeDestroy: function(){
        window.removeEventListener('scroll', this.handleScroll)
      },
      methods: {
        handleScroll: function(){
          if(this.timer ===null){
            this.timer = setTimeout(function(){
            this.scrollY = window.scrollY
            clearTimeout(this.timer)
            this.timer = null
          }.bind(this),200)
        }
        }
      }
    })

    var Modal = new Vue({
      el: '#modal',
      data(){
        return {
          showContent: false,
        }
      },
      methods: {
        openModal: function(){
          this.showContent = true;
        },
        closeModal: function(){
          this.showContent = false;
        }
      }
    })

    Vue.component('open-modal', {
      template:`
      <div class="overlay">
      <div class="content-space">
      <div class="manual">
        <button type="button" v-on:click="$emit('close')">close</button>
        <p class="m-title"><strong>Whatab</strong> <span class="m-title-mini">Manual</span></p>
        <p class="bar">About</p>
        <p class="content">これはあなたが手にする新しいギア。快適な作曲活動を始めましょう。</p>
        <p class="bar">Function</p>
        <img src="./images/manual.png" alt="manual">
        <table class="function">
          <tr>
            <th colspan="2">Control</th>
          </tr>
          <tr>
            <td class="control">①Mute-Button</td>
            <td class="control-content">選択済みのポジションが全てMUTEの位置に戻ります</td>
          </tr>
          <tr>
            <td class="control">②Double-Click</td>
            <td class="control-content">選択済みのポジションをクリックすると、そのマークがMUTEの位置に戻ります。</td>
          </tr>
          <tr>　
            <td class="control">③Keyboard</td>
            <td class="control-content">フレットを選択すると、その音がピアノのどの位置に当たるかを表示します。※オクターブには対応していません。</td>
          </tr>
          <tr>
            <td class="control">④What-Button</td>
            <td class="control-content">ここをクリックするとコードが表示されます。</td>
          </tr>
        </table>
        <p class="bar">Biography</p>
        <p class="content">こんにちは！私たちはQuentinです。日本でバンドとして音楽を作っています。<br>
        </p>
      </div>
      </div>
      </div>
      `,
    });
    </script>

  </body>
</html>
