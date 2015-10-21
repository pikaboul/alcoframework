$(document).keypress(function(e) {
	if(e.which == 13 && $('form').length == 0) {

		ajaxreq(
			{ getForm: true },
			"../add",
			function(result){
				$('.content').prepend(result);
				$('html').addClass('hidden');
			},
			function(){alert( "Request failed: " + textStatus );}
		);

	}
});

$(document).on('submit', 'form', function(e) {
	e.preventDefault();
	ajaxreq(
		$(this).serialize(),
		"../add",
		function(result){
			$('.content').append(result);
			removeToast(200);
		},
		function(){alert( "Request failed: " + textStatus );}
	);
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


$(document).on('click','.toast',function(e) {
	if(e.target == this){
		removeToast(200);
	}
});

function removeToast(timing) {
	$('html').removeClass('hidden');
	$('.toast').fadeOut(timing);
	setTimeout(function(){ $('.toast').remove(); }, timing);
}


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