/* Author: 
*/

function updateTwitter(json) {
  jQuery(".tweet p").each( function(index) { 
   if (!(index < json.length)) {
     return;
   }
   
   var date = new Date(json[index]["created_at"]);
   jQuery(this).html(json[index]["text"] + "<br><a href=\"http://www.twitter.com/hoccer/status/" + json[index]["id"] + "\">» " + date.toLocaleDateString() + "</em>");
  });
}
























