$(document).ready(function() {

	//E-mail Ajax Send
	$("form").submit(function() { //Change
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "ekoapkure.lv/mail.php", //Change
			data: th.serialize()
		}).done(function() {
			alert("Спасибо, мы с вами свяжемся!");
			setTimeout(function() {
				// Done Functions
				th.trigger("reset");
			}, 1000);
		});
		return false;
	});

});