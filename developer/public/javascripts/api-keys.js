$(document).ready(function(){ 
  $('#signup').hide();

  $('#login section p a').bind("click", function(){
    $('#login').hide();
    $('#signup').show();
    return false;
  });

  $('#signup section p a').bind("click", function(){
    $('#signup').hide();
    $('#login').show();
    return false;
  });

});


