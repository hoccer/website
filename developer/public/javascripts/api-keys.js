function goToByScroll(id){
  $('html,body').animate({scrollTop: $("#"+id).offset().top},'slow');
}


$(document).ready(function(){

  //$('#login section p a').bind("click", function(){
  //  $('#login').hide();
  //  $('#signup').show();
  //  return false;
  //});

  //$('#signup section p a').bind("click", function(){
  //  $('#signup').hide();
  //  $('#login').show();
  //  return false;
  //});

  $('#signin_errors').hide();
  if ($('#signin_errors').text().length > 0) {
    $('#signin_errors').delay(300).slideDown();
  }

  //$('.signup_link').each( function() {
  //  $(this).bind("click", function() {
  //    $('#login').hide();
  //    $('#signup').show();
  //    goToByScroll('account_box');
  //    return false;
  //  });
  //});
  $("body").append('<script type="text/javascript" src="http://api.twitter.com/1/statuses/user_timeline/hoccer.json?include_rts=true&count=2&callback=updateTwitter"></script');
});


