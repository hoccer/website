function goToByScroll(id){
  $('html,body').animate({scrollTop: $("#"+id).offset().top},'slow');
}


$(document).ready(function(){

  $('#hoccer_compatible').bind('change', function() {

    var current_state = $(this).attr('checked');

    $.ajax({
      url     : '/account',
      type    : 'PUT',
      data    : 'account[hoccer_compatible]=' + current_state,
      success : function() {
        if (current_state === true) {
          $('p#hoccer_compatible_widget').append('<img id="verified_compatibility" src="/images/hoccer_compatible.png" />')
        } else {
          $('img#verified_compatibility').remove();
        }
      }
    })
  });

  $('#signin_errors').hide();
  if ($('#signin_errors').text().length > 0) {
    $('#signin_errors').delay(300).slideDown();
  }

  $("body").append('<script type="text/javascript" src="http://api.twitter.com/1/statuses/user_timeline/hoccer.json?include_rts=true&count=2&callback=updateTwitter"></script');


});


