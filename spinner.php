<?php 

$bootstrap_margin = "m-3";

$ui_type = "black-tie";
#$ui_type = "smoothness";
#$ui_type = "ui-lightness";
#$ui_type = "ui-darkness";
#$ui_type = "start";
#$ui_type = "redmond";
#$ui_type = "sunny";
#$ui_type = "overcast";
#$ui_type = "le-frog";
#$ui_type = "flick";
#$ui_type = "pepper-grinder";
#$ui_type = "eggplant";
#$ui_type = "dark-hive";
#$ui_type = "cupertino";
#$ui_type = "south-street";
#$ui_type = "blitzer";
#$ui_type = "humanity";
#$ui_type = "hot-sneaks";
#$ui_type = "excite-bike";
#$ui_type = "vader";
#$ui_type = "dot-luv";
#$ui_type = "mint-choc";
#$ui_type = "trontastic";
#$ui_type = "swanky-purse";

?>
<!DOCTYPE html>
<html>
<head>
<title>jQuery BUild Input</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/themes/<?= $ui_type ?>/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>

<script>

$(function(){

  // コントロールを横にしたい場合
  // ※ コントロールのサイズや左右の余白を調整します
  $(".rotate_wrap").css({
    display: "inline-block",
    transform: "rotate(90deg) scale(1.7)",
    "margin":"0 15px 0 18px",
  });
  // 通常は縦です
  $(".normal_wrap").css({
    display: "inline-block",
    transform: "scale(1.6)",
    "margin":"0 15px 0 7px",
  });

  $( "#spinner_x" ).spinner({
    spin: function( event, ui ) {
      var val = $(this).val()-ui.value;
      // ▲ をクリックするか押し続けると処理されます
      if ( val < 0 ) {
        $( ".x" ).each(function(){
          // 数字以外が設定されているフィールドは 0 にリセットする
          $(this).val( (parseInt($(this).val())||0)+1 );
        });
      }
      // ▼ をクリックするか押し続けると処理されます
      else {
        $( ".x" ).each(function(){
          // 数字以外が設定されているフィールドは 0 にリセットする
          $(this).val( (parseInt($(this).val())||0)-1 );
        });
      }
    }
  })
  // 入力部分を使わないので、最小のサイズにして、高さをセット
  .css({ 
    width: "0px",
    "font-size": "0px",
    height: "30px"
   })
  // いったん表示して
  .show()
  // spinner のラッパーを調整します
  .parent().css({width:"16px",border:"1px solid #808080"});

  $( "#spinner_y" ).spinner({
    spin: function( event, ui ) {
      var val = $(this).val()-ui.value;
      // ▲ をクリックするか押し続けると処理されます
      if ( val < 0 ) {
        $( ".y" ).each(function(){
          // 数字以外が設定されているフィールドは 0 にリセットする
          $(this).val( (parseInt($(this).val())||0)+1 );
        });

      }
      // ▼ をクリックするか押し続けると処理されます
      else {
        $( ".y" ).each(function(){
          // 数字以外が設定されているフィールドは 0 にリセットする
          $(this).val( (parseInt($(this).val())||0)-1 );
        });
      }
    }
  })
  // 入力部分を使わないので、最小のサイズにして、高さをセット
  .css({ 
    width: "0px",
    "font-size": "0px",
    height: "30px"
   })
  // いったん表示して
  .show()
  // spinner のラッパーを調整します
  .parent().css({width:"16px",border:"1px solid #808080"});


  $(".ui-button .ui-icon").css({
        "margin-left": "-1px"
  });

});

</script>

</head>
<body>
<h1 class="alert alert-primary">jQuery UI の Spinner を使った増減コントロール</h1>

<div id="spinner_box" class="m-4">
x
<input id="xnum" type="text" size="3" class="x me-2">
<span class="rotate_wrap"><input id="spinner_x" style='display:none;'></span>
<span class="ms-4 me-4">/</span>
y
<input id="ynum" type="text" size="3" class="y me-1">
<span class="normal_wrap"><input id="spinner_y" style='display:none'></span>

<br><br><br><br>
x <input type="text" size="3" class="x">
y <input type="text" size="3" class="y">
<br>
x <input type="text" size="3" class="x">
y <input type="text" size="3" class="y">

</div>

</body>
</html>



<?//php phpinfo() ?>
