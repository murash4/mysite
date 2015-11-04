$(document).ready(function() {
	// navigation
	$("nav a").click(function(event) {
		if(!$(this).hasClass("active")) {
			$("nav a.active").removeClass("active");
			$(this).addClass("active");
		}
		else {
			event.preventDefault();
		}
	});

	var carouselControl = $(".carousel-control");
	carouselControl.each(function() {
		slideControlPos($(this));
	});
	$(window).resize(function() {
		carouselControl.each(function() {
			slideControlPos($(this));
		});
	});

	$("#phone").mask("+7 (999) 999-99-99");

	$("input, textarea").focus(function() {
		if($(this).hasClass("error")) {
			$(this).removeClass("error");
		}
	});

	$("form").submit(function(event) {
		event.preventDefault();
		$("input, textarea").each(function() {
			if($(this).val() == "") {
				$(this).addClass("error");
			}
		});
		validateName($("#name"));
		validateEmail($("#email"));
		var errorCount = $(".error").length;
		if(errorCount == 0) {
			var name = $("#name");
			var email = $("#email");
			var phone = $("#phone");
			var message = $("#message");
			var nameVal = name.val();
			var emailVal = email.val();
			var phoneVal = phone.val();
			var messageVal = message.val();
			var submit = "submit";
			var rq = $.ajax({
				type: "POST",
				url: "views/basic/mail.php",
				data: {"name":nameVal, "email":emailVal, "phone":phoneVal, "message":messageVal, "submit":submit},
				dataType: 'html',
				success: function(data)
					{
					}
			});
			$("form").trigger("reset").next().addClass("active");
		}
	});
});

function validateName(element){
	var value = $(element).val();
	var re = /^[a-zA-Zа-яА-Я]+[\s]*[a-zA-Zа-яА-Я]+$/;
	if(!re.test(value)) {
		$(element).addClass('error');
	}
}

function validateEmail(element){
	var value = $(element).val();
	var re=/^\w+[-a-zA-Z_\.0-9\*\+'!$#%&=\?\^\{}~\|]{0,}@[-a-zA-Z_0-9]+?\.[a-zA-Z]{2,10}$/;
	if(!re.test(value)) {
		$(element).addClass('error');
	}
}

function slideControlPos(element) {
	var elemH = element.height();
	var parentH = $(".carousel").height();
	var elemTop = (parentH - elemH) / 2;
	element.css({"top": elemTop});
}