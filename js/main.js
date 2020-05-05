$(document).ready(function(){
  $("li").mouseenter(function(){
    $("li").css("background-color", "yellow");
  });
  $("li").mouseleave(function(){
    $("li").css("background-color", "lightgray");
  });
});
