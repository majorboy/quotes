$(function(){
  var menu = $(".menu")
  var list = $(".menu__list")

  list.hide();

  menu.hover(function(){
    list.show();
  },
  function(){
    list.hide();
  });
});

