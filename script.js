//     let headerPC = document.getElementById("header-pc");



// var f=function(){
// var event = function(e){


// 	var y =window.scrollY;

// 	if (y>0 && headerPC.className != 'header-pc-version responsive'){
// 		headerPC.className += " responsive";
// 	}
// 	 if(y== 0){
// 		headerPC.className = "header-pc-version";
// 	}	
// }
// window.addEventListener('scroll',event,false);
// 	}

// 	document.addEventListener('DOMContentLoaded',f,false);


	function validateNumber(event) {
		var theEvent = event || window.event;
		var key = theEvent.keyCode || theEvent.which;
		key = String.fromCharCode( key );
		var regex = /[0-9]|\./;
		if( !regex.test(key) ) {
			theEvent.returnValue = false;
			if(theEvent.preventDefault) theEvent.preventDefault();
		}
	}


	$('.calculator-form input').on('keypress', function(event) {
		validateNumber(event)
	});

	$('.calculator-form__row--type .type-item').click(function(){
		$('.calculator-form__row--type .type-item').removeClass('active')
		$(this).addClass('active')

		if ($(this).data('index') == 4) {
			$('.calculator-form__row--turbo').addClass('electro')
		} else {
			$('.calculator-form__row--turbo').removeClass('electro')
		}
	})

	$('.calculator-form .order-btn').click(function(){
		let calc = $('.calculator-form');
			price = calc.find('input[name="calculator_cost"]').val();
			type = $('.calculator-form__row--type .type-item.active').data('index')
			year = calc.find('[name="calculator_year"] :selected').text();
			volume = calc.find('input[name="calculator_turbo"]').val();
			type_tax = 0;
			volume_tax = 0;
			age_tax = 0;

		if (!price) {
			price = 0;
		}

		if (!volume) {
			volume = 0;
		}

		// тип двигателя
		if (type == 2) {
			type_tax = 75;
		} else {
			type_tax = 50;
		}

		// объем двигателя
		volume_tax = volume * 0.001;

		if (volume_tax > 3) {
			if (type == 2) {
				type_tax = 150;
			} else {
				type_tax = 100;
			}
		}

		// коэф. возраста
		if (2020 - year - 1 > 15) {
			age_tax = 15;
		} else if (2020 - year - 1 < 1) {
			age_tax = 1;
		} else {
			age_tax = 2020 - year - 1;
		}

		
		let services = 650;
			port = 350;
			dellivery = 850;
			customs_duty = price * 0.1;
			customs_tax = type_tax * volume_tax * age_tax;
			customs_all_tax = parseInt(customs_duty + customs_tax);
			customs_vat = parseInt(price * 0.2 + customs_all_tax * 0.2)
			customs = parseInt(customs_all_tax + customs_vat);
			total = Number(price) + Number(services) + Number(port) + Number(dellivery) + Number(customs);

		// console.log(customs_duty)
		// console.log(customs_tax)
		// console.log(customs_all_tax)
		// console.log(customs_vat)
		// console.log(customs)
		// console.log(total)

		$('#calculator-price .row-num').text(price)
		// $('#calculator-sbor .row-num').text()
		$('#calculator-service .row-num').text(services)
		// $('#calculator-strahovka .row-num').text()
		$('#calculator-port .row-num').text(port)
		$('#calculator-dellivery .row-num').text(dellivery)
		$('#calculator-customs .row-num').text(customs)
		$('#calculator-total .row-num').text(total)
	})


	// faq
	$('.faq-item').click(function(){
		if (!$(this).hasClass('active')) {
			$('.faq-item').removeClass('active')
			$('.faq-item__body').slideUp(200)
			$(this).toggleClass('active')
			$(this).find('.faq-item__body').slideDown(200)	
		}
	})


	// budget
	$('.budget__slider').slick({
		slidesToShow: 2,
		slidesToScroll: 2,
		arrows: true,
		infinite: true,
		draggable: false,
		autoplay: true,
		autoplaySpeed: 2000,
		prevArrow: '<div class="arrow-left"><svg viewBox="0 0 320 512"><path d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg></div>',
		nextArrow: '<div class="arrow-right"><svg viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg></div>',
		responsive: [
		    {
				breakpoint: 992,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2,
				}
		    },
		    {
				breakpoint: 768,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
				}
		    },
		    {
				breakpoint: 550,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2,
				}
		    },
		    {
				breakpoint: 415,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
				}
		    }
		]
	});

	$('.budget-num').click(function(){
		if (!$(this).hasClass('active')) {
			$('.budget-num, .budget__slider').removeClass('active')
			$(this).addClass('active')
			$('#' + $(this).data('slider')).addClass('active')
		}
	});


	[].forEach.call(document.querySelectorAll('img[data-src]'), function(img) {
		img.removeAttribute('src');
		img.setAttribute('src', img.getAttribute('data-src'));
		img.onload = function() {img.removeAttribute('data-src');};
	});	

    $('.partner-items').slick({
		slidesToShow: 7,
		slidesToScroll: 1,
		arrows: false,
		infinite: true,
		draggable: false,
		autoplay: true,
		autoplaySpeed: 3000,
		responsive: [
		    {
				breakpoint: 992,
				settings: {
					slidesToShow:4
				}
		    },
		    {
				breakpoint: 550,
				settings: {
					slidesToShow: 2
				}
		    }
		]
	});



	$('#form_onclick2').submit(function(e){
		e.preventDefault()
				let countError = 0;
	contactName = $('#catalog-input-name-flat2');
	contactSecondName = $('#catalog-input-secondname-flat2');
	contactEmail = $('#catalog-input-email-flat2');

	contactPhone = $('#catalog-input-phone-flat2');

	var data_json = {
						"фамилия": contactSecondName.val(),
			"email": contactEmail.val(),
			"Цель": "Сделать расчет из США",

		
	}
		
		$.ajax({
		url: '/post_contact.php',
		type: 'post',
		data: {
			subject: 'Форма заявки для получения расчета из США',
			name: contactName.val(),
			phone: contactPhone.val(),
			data_json: JSON.stringify(data_json)
		},
		success: function() {
			$('#reasons_for_work_form input').val('')

			$('.success').fadeIn(200)

			setTimeout(function(){
				$('.success').fadeOut(200)
			}, 3000)
		},
		error: function(xhr, ajaxOptions, thrownError) {
			console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		}
			 });
	})



	$('#reasons_for_work_form-flat').submit(function(e){
		e.preventDefault()
				let countError = 0;
	contactName = $('#catalog-input-name-flat');
	contactSecondName = $('#catalog-input-secondname-flat');
	contactEmail = $('#catalog-input-email-flat');

	contactPhone = $('#catalog-input-phone-flat');

	var data_json = {
						"фамилия": contactSecondName.val(),
			"email": contactEmail.val(),
			"Цель": "получить каталог && начать работать",

		
	}
		
		$.ajax({
		url: '/post_contact.php',
		type: 'post',
		data: {
			subject: 'Форма заявки для получения каталога',
			name: contactName.val(),
			phone: contactPhone.val(),
			data_json: JSON.stringify(data_json)
		},
		success: function() {
			$('#reasons_for_work_form input').val('')

			$('.success').fadeIn(200)

			setTimeout(function(){
				$('.success').fadeOut(200)
			}, 3000)
		},
		error: function(xhr, ajaxOptions, thrownError) {
			console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		}
			 });
	})


                    
        $('#reasons_for_work_form').submit(function(e){
        e.preventDefault()
            let countError = 0;
			contactName = $('#catalog-input-name');
			contactSecondName = $('#catalog-input-secondname');
			contactEmail = $('#catalog-input-email');

			contactPhone = $('#catalog-input-phone');

    	var data_json = {
            		"фамилия": contactSecondName.val(),
					"email": contactEmail.val(),
					"Цель": "получить каталог && начать работать",

    		
    	}
        
    		$.ajax({
				url: '/post_contact.php',
				type: 'post',
				data: {
					subject: 'Форма заявки для получения каталога',
					name: contactName.val(),
					phone: contactPhone.val(),
					data_json: JSON.stringify(data_json)
				},
				success: function() {
					$('#reasons_for_work_form input').val('')

					$('.success').fadeIn(200)

					setTimeout(function(){
						$('.success').fadeOut(200)
					}, 3000)
				},
				error: function(xhr, ajaxOptions, thrownError) {
					console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
				}
           });
    	})

    $('#contacts-container-form').submit(function(e){
        e.preventDefault()
            let countError = 0;
			contactName = $('#name_contacts-input');
			contactPhone = $('#phone_contacts-input');

    	var data_json = {
    		"Город":  $('#city_contacts-input').val(),
    		"Бюджет":  $('#budget_contacts-input').val(),
    		"Сообщение":  $('#message_contacts-input').val(),
			"Цель": "получить обратную связь",

    	}

    	if (!countError) {
    		$.ajax({
				url: '/post_contact.php',
				type: 'post',
				data: {
					subject: 'Форма заявки',
					name: contactName.val(),
					phone: contactPhone.val(),
					data_json: JSON.stringify(data_json)
				},
				success: function() {
					$('#contacts-container-form input, textarea').val('')

					$('.success').fadeIn(200)

					setTimeout(function(){
						$('.success').fadeOut(200)
					}, 3000)
				},
				error: function(xhr, ajaxOptions, thrownError) {
					console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
				}
           });
    	}	
	})

