/* Author: 
*/

function updateTwitter(json) {
	$(".tweet p").each( function(index) { 
		if (!(index < json.length)) {
		 	return;
		}
		
		var date = new Date(json[index]["created_at"]);
		$(this).html(json[index]["text"] + " <em>" + date.toLocaleDateString()+ "</em>");
	});
}
























