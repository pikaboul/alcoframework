$(document).keypress(function(e) {
	if(e.which == 13) {
		var firstname = prompt("Newbie's first name?");
		var lastname = prompt("Newbie's last name?");
		var age    = prompt("For how long?");
		if(firstname != "" && firstname !== null)
		{
			ajaxreq(
				{ lastname: lastname, firstname: firstname, age: age },
				"../add",
				function(result){
					$('.content').append(result);
				},
				function(){alert( "Request failed: " + textStatus );});
		}
	}
});


$(document).on('click','.remove',function(e) {
	var id = $(this).attr('data-id');
	ajaxreq(
		{ id: id },
		"../remove",
		function(id){
			$('#' + id).slideUp();
			setTimeout(function(){
				$('#' + id).remove();
			},500);
		},
		function() {
		alert( "Request failed: " + textStatus );
		}
	);
});


function ajaxreq(data, url, callbackdone, callbackfail)
{
	var request = $.ajax({
		url: url,
		method: "POST",
		data: data
	});

	request.done(callbackdone);

	request.fail(callbackfail);
}