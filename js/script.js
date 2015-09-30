$(document).keypress(function(e) {
	if(e.which == 13) {
		var firstname = prompt("Newbie's first name?");
		var lastname = prompt("Newbie's last name?");
		var age    = prompt("For how long?");
		if(firstname != "" && firstname !== null && age != "" && age !== null)
		{
			ajaxreq({ lastname: lastname, firstname: firstname, age: age },"http://localhost:3000/Back/add",function(){$('body').append('<div class="name"><h1 class="animated bounceInLeft" style="-webkit-animation-delay: 1s;">' + firstname + ',<div class="age">alcoolique depuis ' + age + ' ans</div></h1></div>');},function(){alert( "Request failed: " + textStatus );});
		}
	}
});


$(document).on('click','.remove',function(e) {
	var id = $(this).attr('data-id');
	ajaxreq({ lastname: lastname, firstname: firstname, id: id },"http://localhost:3000/Back/remove",function(){},function(){});
});






function ajaxreq(data, url, callbackdone, callbackfail)
{
	var request = $.ajax({
		url: url,
		method: "POST",
		data: data
	});
	 
	request.done(function( msg ) {
		$('body').append('<div class="name"><h1 class="animated bounceInLeft" style="-webkit-animation-delay: 1s;">' + firstname + ',<div class="age">alcoolique depuis ' + age + ' ans</div></h1></div>');
	});
	 
	request.fail(function( jqXHR, textStatus ) {
		alert( "Request failed: " + textStatus );
	});
}