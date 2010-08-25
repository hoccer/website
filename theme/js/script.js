/* Author: 
*/

function updateTwitter(json) {
	$(".tweet p").each( function(index) { 
		if (!(index < json.length)) {
		 	return;
		}
		
		var date = new Date(json[index]["created_at"]);
		$(this).html(json[index]["text"] + "<br><a href=\"http://www.twitter.com/hoccer/status/" + json[index]["id"] + "\">» " + date.toLocaleDateString() + "</em>");
	});
}
























