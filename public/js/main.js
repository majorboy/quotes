(function(){
  'use strict';
  // Quote削除
  var cmds = document.getElementsByClassName('delete');
  var i;

  for(i = 0; i < cmds.length; i++) {
    cmds[i].addEventListener('click', function(e){
      e.preventDefault();
      if(confirm('Quoteを削除しますか？')){
        document.getElementById('form_' + this.dataset.id).submit();
      }
    });
  }
  // Stock追加
  var stocks = document.getElementsByClassName('stock');
  for(i=0; i < stocks.length; i++) {
    stocks[i].addEventListener('click',function(e){
      e.preventDefault();
      document.getElementById('stock_' + this.dataset.id).submit();
    });
  }

  // Stock解除
  var unstocks = document.getElementsByClassName('unstock');
  for(i=0; i < unstocks.length; i++) {
    unstocks[i].addEventListener('click',function(e){
      console.log('OK');
      e.preventDefault();
      document.getElementById('unstock_' + this.dataset.id).submit();
    });
  }
})();

