(function(){
  'use strict';

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
})();