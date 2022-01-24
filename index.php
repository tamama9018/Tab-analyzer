<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Whatab</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" href="CSS/main.css">
    <link rel="icon" href="./images/favicon.ico">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <script src="pianotest.js" charset="utf-8"></script>
  </head>
  <body onload="putImg1(),putImg2(),putImg3(),putImg4(),putImg5(),putImg6()">
    <header>
      <h1>Whatab</h1>
      <div id="modal">
        <button type="button" @click="openModal" class="manual-button"><i class="fas fa-book fa-lg"></i><br>Manual</button>
        <open-modal v-show="showContent" @close="showContent = false"></open-modal>
      </div>
    </header>
    <div class="conteinar">
     <div class="answer" id="app"  v-bind:class="{compact: scrollY > 50}">
       <?php
        session_start();
         foreach (['string1', 'string2', 'string3', 'string4', 'string5', 'string6'] as $string){
             $strings[$string] = (int)filter_input(INPUT_POST, $string);
         }     
         $cutMute = array_diff($strings, array('101','102','103','104','105','106'));
         $cutMute = array_values($cutMute);
         $space = " ";
         $sendValue =implode($space,$cutMute);
         $command = "python src/main.py ${sendValue}";
         putenv("PYTHONUTF8=1");
         exec($command, $output);
         foreach ($output as $o) {
          // code...
             $o = str_replace('[',' ',$o);
             $o = str_replace(']',' ',$o);
             $o = str_replace("'",'',$o);
             if($o == 0){
                 echo " ";
             }else{
                 echo "<span class='chord-sp'>". htmlspecialchars($o, ENT_QUOTES, 'UTF-8') . "</span>";
             }
          }
        ?>
     </div>
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
            <?php if ($st1 > 100) {  ?>
              <label class=my-radio>
                <input type=radio name=string1 onclick="muteImg1()" value=<?php echo htmlspecialchars($st1, ENT_QUOTES, 'UTF-8');?> checked>
                <span class=radio-mark></span>
                <span class=hidden>1</span>
              </label>
            <?php
              }else{
            ?>
              <label class=my-radio>
                <input type=radio name=string1 onclick="showImg1()" value=<?php echo htmlspecialchars($st1, ENT_QUOTES, 'UTF-8');?> <?php if(isset($_POST['string1']) && $_POST['string1'] == $st1)echo 'checked'; ?> >
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
            <?php if ($st2 > 100) { ?>
                <label class=my-radio>
                    <input type=radio name=string2 onclick="muteImg2()" value=<?php echo htmlspecialchars($st2, ENT_QUOTES, 'UTF-8');?> checked>
                    <span class=radio-mark></span>
                    <span class=hidden>1</span>
                </label>
            <?php
              }else{
            ?>
              <label class=my-radio>
                <input type=radio name=string2 onclick="showImg2()" value=<?php echo htmlspecialchars($st2, ENT_QUOTES, 'UTF-8');?> <?php if(isset($_POST['string2']) && $_POST['string2'] == $st2)echo 'checked'; ?>>
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
                  <input type=radio name=string3  onclick="muteImg3()" value=<?php echo htmlspecialchars($st3, ENT_QUOTES, 'UTF-8');?> checked>
                  <span class=radio-mark></span>
                  <span class=hidden>1</span>
                </label>
            <?php
                }else{
            ?>
              <label class=my-radio>
                <input type=radio name=string3 onclick="showImg3()" value=<?php echo htmlspecialchars($st3, ENT_QUOTES, 'UTF-8');?> <?php if(isset($_POST['string3']) && $_POST['string3'] == $st3)echo 'checked'; ?>>
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
            <?php if ($st4 > 100) { ?>
              <label class=my-radio>
                <input type=radio name=string4 onclick="muteImg4()" value=<?php echo htmlspecialchars($st4, ENT_QUOTES, 'UTF-8');?> checked>
                <span class=radio-mark></span>
                <span class=hidden>1</span>
              </label>
            <?php
              }else{
            ?>
              <label class=my-radio>
                <input type=radio name=string4 onclick="showImg4()" value=<?php echo htmlspecialchars($st4, ENT_QUOTES, 'UTF-8');?> <?php if(isset($_POST['string4']) && $_POST['string4'] == $st4)echo 'checked'; ?>>
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
            <?php if ($st5 > 100) {  ?>
              <label class=my-radio>
                <input type=radio name=string5 onclick="muteImg5()" value=<?php echo htmlspecialchars($st5, ENT_QUOTES, 'UTF-8');?> checked>
                <span class=radio-mark></span>
                <span class=hidden>1</span>
              </label>
            <?php
              }else{
            ?>
              <label class=my-radio>
                <input type=radio name=string5 onclick="showImg5()" value=<?php echo htmlspecialchars($st5, ENT_QUOTES, 'UTF-8');?> <?php if(isset($_POST['string5']) && $_POST['string5'] == $st5)echo 'checked'; ?>>
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
            <?php if ($st6 > 100) {   ?>
              <label class=my-radio>
                <input type=radio name=string6 onclick="muteImg6()" value=<?php echo htmlspecialchars($st6, ENT_QUOTES, 'UTF-8');?> checked>
                <span class=radio-mark></span>
                <span class=hidden>1</span>
              </label>
            <?php
              }else{
            ?>
            <label class=my-radio>
              <input type=radio name=string6 onclick="showImg6()" value=<?php echo htmlspecialchars($st6, ENT_QUOTES, 'UTF-8');?> <?php if(isset($_POST['string6']) && $_POST['string6'] == $st6)echo 'checked'; ?>>
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
     <button type="submit" class="searchbtn" name="recent-show" value="save">What?</button>
     <?php 
       foreach ($output as $o) {
          // code...
             $o = str_replace('[',' ',$o);
             $o = str_replace(']',' ',$o);
             $o = str_replace("'",'',$o);
             if($o == 0){
                 echo " ";
             }else{
                 echo "<span class='chord-pc'>". htmlspecialchars($o, ENT_QUOTES, 'UTF-8') . "</span>";
             }
          } 
      ?>
    </div>
    </form>
  </div>
  <?php 
  if(isset($_POST['recent-show'])) {
    if(!isset($_SESSION['code'])){
      $_SESSION['code'] = [];
    }
    if($_POST['recent-show'] === 'save' && !empty($output)) {
       array_push($strings,$output);
       array_unshift($_SESSION['code'], $strings);
      }
    } 
  ?>
  <div class="recent-shows">
    <h2 class="shows-title">Recent Shows</h2>
    <ul>
      <?php if(isset($_SESSION['code'])): ?>
        <?php for($i = 0; $i < count($_SESSION['code']); $i++):?>
                <?php if($i >= 10) break;?>
                <li>
                    <form action="index.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $i;?>">
                    <input type="hidden" name="string1" value="<?php echo $_SESSION['code'][$i]["string1"];?>">
                    <input type="hidden" name="string2" value="<?php echo $_SESSION['code'][$i]["string2"];?>">
                    <input type="hidden" name="string3" value="<?php echo $_SESSION['code'][$i]["string3"];?>">
                    <input type="hidden" name="string4" value="<?php echo $_SESSION['code'][$i]["string4"];?>">
                    <input type="hidden" name="string5" value="<?php echo $_SESSION['code'][$i]["string5"];?>">
                    <input type="hidden" name="string6" value="<?php echo $_SESSION['code'][$i]["string6"];?>">
                    <button type="submit" name="type" value="show" class="show-button">
                    <?php 
                      $buttonName = str_replace('[',' ',$_SESSION['code'][$i][0][0]);
                      $buttonName = str_replace(']',' ',$buttonName);
                      $buttonName = str_replace("'",'',$buttonName);
                      echo htmlspecialchars($buttonName, ENT_QUOTES, 'UTF-8'); ?>
                    </button>
                    </form>
                </li>
        <?php endfor; ?>
      <?php endif; ?>
    </ul>
  </div>
</div>
</form>
   
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.13/dist/vue.js"></script>
    <script type="text/javascript">
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

  
    Vue.component('open-modal', {
      template : `
      <div class="overlay">
        <div class="content-space">
          <div class="manual">
            <div class="manual-header">
              <p class="m-title"><strong>Whatab</strong> <span class="m-title-mini">Manual</span></p>
              <div class="share">
                <div class="btn-icon"><a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwhatab.herokuapp.com" class="facebook"><i class="fab fa-facebook  my-gray"></i></a></div>
                <div class="btn-icon"><a href="https://twitter.com/intent/tweet?url=https%3A%2F%2Fwhatab.herokuapp.com" class="twitter"><i class="fab fa-twitter  my-gray"></i></a></div>
                <div class="btn-icon"><button type="button" v-on:click="$emit('close')" class="close-btn">☒</button></div>
              </div>
            </div>
              <p class="bar">About</p>
              <p class="content"><strong>これはあなたが手にする新しいギア。</strong>快適な作曲活動を始めましょう。</p>
              <p class="content">Whatabでは今あなたが押さえているコードの名前を調べることができます。加えて、
              キーボードのポジションも表示されるため、ギタリストがDTMで作曲をするための手助けになるでしょう。</p>
              <p class="bar">Function</p>
              <img src="./images/manual-image.png" alt="manual" class="manual-image">
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
              元々このアプリは自分たちが作曲をスムーズに行うために作成しました。<br>
              しかし、どこかしらにこういったアプリを使いたい人がいるのではないかと思い、デザインを整えて
              リリースしようと決めたのです。<br>
              TwitterとYoutubeをやっているのでぜひチェックしてください！</p>
          </div>
        </div>
      </div>
      `
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
    </script>
  </body>
</html>
