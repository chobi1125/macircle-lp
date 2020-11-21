$(function() {
  /*----------
  index.html トグルメニュー用
  ----------*/
  $("button").click(function(){
    $("ul").slideToggle(200);
  });
  /*----------
  sheet.html用
  ----------*/
  $(".alert").hide();
  $("#submitBtn").click(function(){
    if(!$("#text").val()){
      $("#textSection .alert").show();
      return false; //送信されないようにする
    }else{
      $("#textSection .alert").hide();
      
    }

  });
});