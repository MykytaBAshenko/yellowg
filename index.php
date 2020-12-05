<?php
    session_start();
    require_once "config.php";
    
	$loginURL = $gClient->createAuthUrl();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="maximum-scale=1, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">    
    <link rel="stylesheet" href="style.css">    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"  ></script>

<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<body>

</head>

    <header id="header-pc" class="header-pc-version">
        <div class="navbar-meta-data">
            <div class="navbar-logo">
            </div>
  
            <div class="navbar-meta-data-exact">
                <div class="navbar-meta-data-phone">
                    <div class="navbar-meta-data-phone-exact">
                        <div class="navbar-meta-data-phone-exact-exact">
                        <i class="fa fa-phone"></i>
                            
                        <div class="navbar-call-to-us">
                            <div>СВЯЗАТЬСЯ С НАМИ</div>
                            <a href="#">0 800 331 011</a>
                        </div>
                    </div>

                    </div>
                </div>
                <div class="navbar-meta-data-language">
                    <ul>
                        <li>
                            <a href="#">
                                UA
                            </a>
                        </li>
                        
                        <li>
                            <a href="#">
                                EN
                            </a>
                        </li>
                        <li class="active">
                            <a href="#">
                                RU
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="navigation">
            <div class="navigation-shell">
            <div class="navigation-image">
                <img src="./images/logo.png"/>
            </div>
            <ul class="navigation-links">
                <li>
                    <a href="#">о нас</a>
                </li>
                <li>
                    <a href="#">оформление</a>
                </li>
                <li>
                    <a href="#">калькулятор</a>
                </li>
                <li>
                    <a href="#">блог</a>
                </li>
                <li>
                    <a href="#">контакты</a>
                </li>
                <li>
                    <a href="#">сто</a>
                </li>
            </ul>
            <ul class="navigation-social">
                <li>
                    <a href="#">
                        <svg   viewBox="-21 -21 682.66669 682.66669"  xmlns="http://www.w3.org/2000/svg"><path d="m604.671875 0h-569.375c-19.496094.0117188-35.30078125 15.824219-35.296875 35.328125v569.375c.0117188 19.496094 15.824219 35.300781 35.328125 35.296875h306.546875v-247.5h-83.125v-96.875h83.125v-71.292969c0-82.675781 50.472656-127.675781 124.222656-127.675781 35.324219 0 65.679688 2.632812 74.527344 3.808594v86.410156h-50.855469c-40.125 0-47.894531 19.066406-47.894531 47.050781v61.699219h95.9375l-12.5 96.875h-83.4375v247.5h162.796875c19.507813.003906 35.324219-15.804688 35.328125-35.3125 0-.003906 0-.007812 0-.015625v-569.375c-.007812-19.496094-15.824219-35.30078125-35.328125-35.296875zm0 0"/></svg>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <svg viewBox="0 0 512.00096 512.00096"  xmlns="http://www.w3.org/2000/svg"><path d="m373.40625 0h-234.8125c-76.421875 0-138.59375 62.171875-138.59375 138.59375v234.816406c0 76.417969 62.171875 138.589844 138.59375 138.589844h234.816406c76.417969 0 138.589844-62.171875 138.589844-138.589844v-234.816406c0-76.421875-62.171875-138.59375-138.59375-138.59375zm-117.40625 395.996094c-77.195312 0-139.996094-62.800782-139.996094-139.996094s62.800782-139.996094 139.996094-139.996094 139.996094 62.800782 139.996094 139.996094-62.800782 139.996094-139.996094 139.996094zm143.34375-246.976563c-22.8125 0-41.367188-18.554687-41.367188-41.367187s18.554688-41.371094 41.367188-41.371094 41.371094 18.558594 41.371094 41.371094-18.558594 41.367187-41.371094 41.367187zm0 0"/><path d="m256 146.019531c-60.640625 0-109.980469 49.335938-109.980469 109.980469 0 60.640625 49.339844 109.980469 109.980469 109.980469 60.644531 0 109.980469-49.339844 109.980469-109.980469 0-60.644531-49.335938-109.980469-109.980469-109.980469zm0 0"/><path d="m399.34375 96.300781c-6.257812 0-11.351562 5.09375-11.351562 11.351563 0 6.257812 5.09375 11.351562 11.351562 11.351562 6.261719 0 11.355469-5.089844 11.355469-11.351562 0-6.261719-5.09375-11.351563-11.355469-11.351563zm0 0"/></svg>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 	 viewBox="0 0 455 455"  xml:space="preserve"><path style="fill-rule:evenodd;clip-rule:evenodd;" d="M0,0v455h455V0H0z M375.918,337.361c-12.346,36.714-42.54,51.92-78.29,37.357	c-51.488-20.973-95.867-49.188-132.199-85.521c-36.332-36.332-64.548-80.711-85.521-132.199	c-14.563-35.75,0.643-65.944,37.357-78.29c6.591-2.216,13.043-2.371,19.522,0.014c15.657,5.759,55.305,60.331,56.194,76.66	c0.681,12.523-7.829,19.306-16.274,25.037c-15.953,10.837-16.042,24.576-9.225,39.898c6.862,15.419,15.662,28.91,26.79,40.037	c11.127,11.128,24.618,19.928,40.037,26.79c15.323,6.818,29.061,6.729,39.899-9.224c5.731-8.446,12.513-16.956,25.037-16.275	c16.329,0.889,70.901,40.537,76.661,56.194C378.288,324.318,378.134,330.77,375.918,337.361z M324.334,196.112	c-1.376-15.859-8.757-31.218-20.785-43.245c-12.579-12.58-28.911-20.324-45.987-21.804c-4.699-0.407-9.41-0.316-13.997,0.269	c-5.737,0.73-11.012-3.331-11.746-9.084c-0.735-5.752,3.332-11.011,9.084-11.747c6.068-0.774,12.283-0.895,18.474-0.36	c21.993,1.907,42.954,11.808,59.022,27.877c15.517,15.516,25.055,35.503,26.857,56.281c0.499,5.769,0.387,11.572-0.335,17.25	c-0.674,5.303-5.193,9.177-10.402,9.178c-0.442,0-0.888-0.028-1.337-0.084c-5.753-0.731-9.824-5.987-9.093-11.74	C324.622,204.7,324.705,200.396,324.334,196.112z M289.465,199.135c-1.429-16.48-17.423-31.686-34.926-33.203	c-1.393-0.121-2.778-0.154-4.117-0.099c-5.787,0.231-10.685-4.264-10.924-10.058s4.264-10.685,10.059-10.924	c2.229-0.09,4.514-0.038,6.796,0.159c27.967,2.424,51.701,25.402,54.034,52.312c0.213,2.461,0.238,4.925,0.074,7.327	c-0.377,5.542-4.991,9.787-10.465,9.787c-0.24,0-0.481-0.008-0.724-0.025c-5.786-0.394-10.157-5.403-9.763-11.189	C289.599,201.896,289.585,200.521,289.465,199.135z M378.864,221.167c-0.887,5.105-5.322,8.705-10.332,8.705	c-0.597,0-1.201-0.051-1.81-0.157c-5.713-0.992-9.541-6.428-8.548-12.142c1.395-8.029,1.74-16.267,1.028-24.484	c-2.086-24.054-13.062-47.128-30.905-64.971c-18.396-18.396-42.444-29.734-67.715-31.924c-8.2-0.713-16.417-0.429-24.42,0.841	c-5.733,0.908-11.106-2.999-12.015-8.725c-0.908-5.728,2.999-11.107,8.726-12.016c9.687-1.537,19.62-1.88,29.523-1.022	c30.187,2.617,58.864,16.111,80.75,37.997c21.333,21.333,34.465,49.037,36.978,78.007	C380.993,201.298,380.569,211.354,378.864,221.167z"/><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <svg id="Bold"  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m9.417 15.181-.397 5.584c.568 0 .814-.244 1.109-.537l2.663-2.545 5.518 4.041c1.012.564 1.725.267 1.998-.931l3.622-16.972.001-.001c.321-1.496-.541-2.081-1.527-1.714l-21.29 8.151c-1.453.564-1.431 1.374-.247 1.741l5.443 1.693 12.643-7.911c.595-.394 1.136-.176.691.218z"/></svg>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    </header>


      <div class="start-section">
        <div class="start-content">
            <div class="start-content-title">
                Lorem IPSUM
            </div>

            <div class="start-content-text">
                Lorem ipsum dolor sit amet, consectetur 
                adipiscing elit, sed do eiusmod tempor 
                incididunt ut labore et dolore magna aliqua.
            </div>

            <div class="start-content-btns">
                <a href="#" class="start-content-btn-phone">
                    <span>
                        <i class="fa fa-phone"></i>
                        0 800 311 011
                    </span>
                </a>
                <a href="#" class="start-content-btn-about">
                    о нас
                </a>
            </div>
        </div>
      </div>

      <div class="reasons_for_work" id="reasons_for_work">
        <div class="reasons_for_work_title">7 причин получить предложение</div>
        <div class="reasons_for_work_container">
            <div class="reasons_for_work_text">
                <div class="reasons_for_work_text-exact">
                    1. Мы являемся партнером международной логистической компании Lion Trans и официальным представителем американского аукциона iaai.com в Украине. (информация на сайте iaai.com) <br><br>
                    2. Для нас нет ничего невозможного - мы можем доставить Вам машину из США, Грузии или Кореи. <br><br>
                    3. Мастера и собственные СТО в Киеве и Одессе помогают оптимально решить любую проблему.  <br><br>
                    4. Когда становится вопрос про запчасти - все обращаются к нам.  <br><br>
                    5. Мы выполняем свои обязательства точно в срок, и имеем высокий уровень экспертизы.  <br><br>
                    6. 5 офисов в США, офисы в Украине, и логисты в Одессе и Грузии работат для Вашей поддержки.<br>  <br>
                    7. Мы предоставляем  выгодные условия и бонусы для того, чтобы нас рекомендовали.<br><br>
                </div> 
                <!-- <div class="reasons_for_work_text-div">
                    <a class="reasons_for_work_text_button"  href="#">подробнее</a>
                </div> -->
            </div>
            <form action="#" id="reasons_for_work_form" class="reasons_for_work_form">
                <div class="reasons_for_work_form-title">
                    получить каталог авто с расчетом под ваш бюджет
                </div>
                <div class="reasons_for_work_form-control">
                    <input id="catalog-input-name" placeholder="Имя" />
                    <input id="catalog-input-secondname" placeholder="Фамилия" />
                    <input id="catalog-input-email" placeholder="E-mail"/>
                    <input id="catalog-input-phone" placeholder="Телефон"/>
                </div>
                <div class="reasons_for_work_form-social-control">
                    <div class="form-social-control-container-or">или</div>
                    <div class="form-social-control-container">
                        <div class="form-social-control-container-shell">
                            <a class="btn-google" onclick="window.location = '<?php echo $loginURL ?>';">
                                <div class="google-content">
                                    <div class="logo">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48">
                                        <defs><path id="a" d="M44.5 20H24v8.5h11.8C34.7 33.9 30.1 37 24 37c-7.2 0-13-5.8-13-13s5.8-13 13-13c3.1 0 5.9 1.1 8.1 2.9l6.4-6.4C34.6 4.1 29.6 2 24 2 11.8 2 2 11.8 2 24s9.8 22 22 22c11 0 21-8 21-22 0-1.3-.2-2.7-.5-4z"/></defs><clipPath id="b"><use xlink:href="#a" overflow="visible"/></clipPath><path clip-path="url(#b)" fill="#FBBC05" d="M0 37V11l17 13z"/><path clip-path="url(#b)" fill="#EA4335" d="M0 11l17 13 7-6.1L48 14V0H0z"/><path clip-path="url(#b)" fill="#34A853" d="M0 37l30-23 7.9 1L48 0v48H0z"/><path clip-path="url(#b)" fill="#4285F4" d="M48 48L17 24l-4-3 35-10z"/>
                                    </svg>
                                    </div>
                                    <p> Google</p>
                                </div>
                            </a>
                            <a class="btn-fb" href="">
                                <div class="fb-content">
                                    <div class="logo">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" version="1">
                            <path fill="#FFFFFF" d="M32 30a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h28a2 2 0 0 1 2 2v28z"/>
                            <path fill="#4267b2" d="M22 32V20h4l1-5h-5v-2c0-2 1.002-3 3-3h2V5h-4c-3.675 0-6 2.881-6 7v3h-4v5h4v12h5z"/>
                          </svg>
                                    </div>
                                    <p>Facebook</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="reasons_for_work_form-social-btn">
                        <button type="submit">отправить заявку</button>
                    </div> 
                </div>
            </form>
        </div>
      </div>
      <div class="cars-posts">
        <div class="cars-posts-shell">
            <div class="cars-posts-title">
                Мы поставляем авто и запчасти к ним на такие марки
            </div>
            <img src="images/cars-comp.png" alt="">
        </div>
      </div>
      <div class="vigoda">
        <div class="vigoda-shell">
            <div class="vigoda-title">
                выгоды и бюджеты
            </div>
            <div class="vigoda-main">
                <div class="vigoda-control">
                    <div class="vigoda-control-exact">
                        <button class="btn-video-ctr" onclick="video_c(1)" id="ctrl-btn1"><span>до $10 000</span> <i class="fa fa-long-arrow-right"></i></button>
                        <button  class="btn-video-ctr"  onclick="video_c(2)" id="ctrl-btn2"><span>от $10 000 до $16 000</span> <i class="fa fa-long-arrow-right"></i></button>

                        <button class="btn-video-ctr"  onclick="video_c(3)" id="ctrl-btn3"><span>от $16 000 до $25 000</span> <i class="fa fa-long-arrow-right"></i></button>
                        <button class="btn-video-ctr"  onclick="video_c(4)"  id="ctrl-btn4"><span>более $25 000</span> <i class="fa fa-long-arrow-right"></i></button>
                        <button class="btn-video-ctr"  onclick="video_c(5)" id="ctrl-btn5"><span>эксклюзив</span> <i class="fa fa-long-arrow-right"></i></button>


                    </div>
                    <a href="#reasons_for_work" class="get-catalog">
                        получить каталог
                    </a>
                </div>
                <div clss="video-container">
                    <iframe  id="video-iframe" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>            </div>
                </div>
      </div>
    </div>
      <script>
        
let videodiv = document.getElementById("video-iframe") 
let ctrl1 = document.getElementById("ctrl-btn1")
let ctrl2 = document.getElementById("ctrl-btn2")
let ctrl3 = document.getElementById("ctrl-btn3")
let ctrl4 = document.getElementById("ctrl-btn4")
let ctrl5 = document.getElementById("ctrl-btn5")
let btns = document.getElementsByClassName("btn-video-ctr")
//   let 
let arr_v = [
  "https://www.youtube.com/embed/5gYoUm3wLHI",
  "https://www.youtube.com/embed/FwUsIr5OHFE",
  "https://www.youtube.com/embed/uhNHX5fbnkg",
  "https://www.youtube.com/embed/FwUsIr5OHFE",
  "https://www.youtube.com/embed/uhNHX5fbnkg"
]
function video_c(n){
  for(let yy = 0; yy < btns.length; yy++){
      btns[yy].className = "btn-video-ctr"
  }
  if(n == 1){
      videodiv.src = arr_v[n-1]
      ctrl1.className += " active"
  }
  if(n == 2){
      videodiv.src = arr_v[n-1]
      ctrl2.className += " active"
  }
  if(n == 3){
      videodiv.src = arr_v[n-1]
      ctrl3.className += " active"
  }
  if(n == 4){
      videodiv.src = arr_v[n-1]
      ctrl4.className += " active"
  }
  if(n == 5){
      videodiv.src = arr_v[n-1]
      ctrl5.className += " active"
  }
}
document.addEventListener("DOMContentLoaded", function(event) {
  video_c(1)
});

      </script>
      <style>
    
        </style>


	<div class="calculator" id="calculator">

		<div class="calculator-title">
			<span>Расчёт авто из США под ключ</span>
		</div>
		<div class="container">
			<div class="calculator-form">
				<div class="calculator-form__data">
					<div class="calculator-form__row calculator-form__row--cost">
						<div class="icon"><img src="images/dollar.png" alt=""></div>
						<div class="name">Стоимость на аукционе, $</div>
						<div class="input">
							<input type="text" name="calculator_cost">
						</div>
					</div>
					<div class="calculator-form__row calculator-form__row--type">
						<div class="type-item active" data-index="1">
							<div class="type-item__circle"></div>
							<div class="type-item__name">Бензин</div>
						</div>
						<div class="type-item" data-index="2">
							<div class="type-item__circle"></div>
							<div class="type-item__name">Дизель</div>
						</div>
						<div class="type-item" data-index="3">
							<div class="type-item__circle"></div>
							<div class="type-item__name">Гибрид</div>
						</div>
						<div class="type-item" data-index="4">
							<div class="type-item__circle"></div>
							<div class="type-item__name">Электро</div>
						</div>
					</div>      
					<div class="calculator-form__row calculator-form__row--year">
						<div class="icon"><img src="images/calendar.png" alt=""></div>
						<div class="name">Год выпуска</div>
						<div class="input">
							<select name="calculator_year">
								<option value="1995">1995</option>
								<option value="1996">1996</option>
								<option value="1997">1997</option>
								<option value="1998">1998</option>
								<option value="1999">1999</option>
								<option value="2001">2001</option>
								<option value="2002">2002</option>
								<option value="2003">2003</option>
								<option value="2004">2004</option>
								<option value="2005">2005</option>
								<option value="2006">2006</option>
								<option value="2007">2007</option>
								<option value="2008">2008</option>
								<option value="2009">2009</option>
								<option value="2010">2010</option>
								<option value="2011">2011</option>
								<option value="2012">2012</option>
								<option value="2013">2013</option>
								<option value="2014">2014</option>
								<option value="2015">2015</option>
								<option value="2016">2016</option>
								<option value="2017">2017</option>
								<option value="2018">2018</option>
								<option value="2019">2019</option>
								<option value="2020">2020</option>
							</select>
						</div>
					</div>
					<div class="calculator-form__row calculator-form__row--turbo">
						<div class="icon"><img src="images/turbo.png" alt=""></div>
						<div class="name">Объем двигателя, см3</div>
						<div class="name name__electro">Объем АКБ, кВт/час</div>
						<div class="input">
							<input type="text" name="calculator_turbo">
						</div>
					</div>
				</div>
				<div class="calculator-form__button">
					<p>Расчет приблизительный. Для точного расчета оставьте заявку на бесплатный подбор автомобиля.</p>
					<div class="order-btn">
						<span class="order-btn__text">Рассчитать</span>
					</div>
				</div>
			</div>
			<div class="calculator-result">
				<div class="calculator-result__data">
					<div class="calculator-result__title">РЕЗУЛЬТАТЫ РАСЧЁТА</div>
					<div class="calculator-result__row" id="calculator-price">
						<div class="row-name">Цена лота на аукционе</div>
						<div class="row-num">0</div>
					</div>
					<div class="calculator-result__row" id="calculator-sbor">
						<div class="row-name">Сбор аукциона</div>
						<div class="row-num">0</div>
					</div>
					<div class="calculator-result__row" id="calculator-service">
						<div class="row-name">Наши услуги</div>
						<div class="row-num">650</div>
					</div>
					<div class="calculator-result__row" id="calculator-strahovka">
						<div class="row-name">Страховка</div>
						<div class="row-num">0</div>
					</div>
					<div class="calculator-result__row" id="calculator-port">
						<div class="row-name">Доставка машины до места отправки</div>
						<div class="row-num">350</div>
					</div>
					<div class="calculator-result__row" id="calculator-dellivery">
						<div class="row-name">Доставка в Украину</div>
						<div class="row-num">850</div>
					</div>
					<div class="calculator-result__row" id="calculator-customs">
						<div class="row-name">Таможенные платежи</div>
						<div class="row-num">0</div>
					</div>
					<div class="calculator-result__row" id="calculator-total">
						<div class="row-name">ВСЕГО</div>
						<div class="row-num">1250</div>
					</div>

				</div>
				<div class="calculator-result__button">
					<a href="#contacts" class="order-btn callback__call" id="calculate-button">
						<span class="order-btn__text as_event_1">Заказать</span>
                    </a>
				</div>
			</div>
		</div>
	</div>


        <div class="imdge-block">
            <div class="imdge-block-shell">
                <div class="imdge-block-title">
                    Имиджевый блок о нас
                </div>
                <div class="imdge-block-map">
                    <img src="./images/imdge/imdge1.png" alt="">
                    <img src="./images/imdge/imdge2.png" alt="">
                    <img src="./images/imdge/imdge3.png" alt="">
                    <img src="./images/imdge/imdge4.png" alt="">
                    <img src="./images/imdge/imdge5.png" alt="">
                </div>
            </div>            
        </div>
        <style>
         
        </style>
        <div class="news-blog">
            <div class="news-blog-shell">
                <div class="news-blog-title">
                    Интересные статьи
                </div>
                <div class="news-blog-map">
                    <a href="#" class="news-blog-block">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. efwe dgtnrfhvcgrvf 
                    </a>
                    <a href="#" class="news-blog-block">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. efwe dgtnrfhvcgrvf 
                    </a>
                    <a href="#" class="news-blog-block">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    </a>
                    <a href="#" class="news-blog-block">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. efwe dgtnrfhvcgrvf 
                    </a>
                    <a href="#" class="news-blog-block">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. efwe dgtnrfhvcgrvf 
                    </a>
                    <a href="#" class="news-blog-block">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    </a>
                </div>
            </div>
        </div>
        
        <div class="call-to-us">
            <div class="call-to-us-shell">
                <div class="call-to-us-text">
                    <div class="call-to-us-text-title">
                        позвоните нам
                    </div>
                    <div class="call-to-us-text-second">
                        позвоните нам это бесплатно
                    </div>
                </div>
                <div class="call-to-us-btn-cont">
                    <a href="#">
                        <div>
                        <i class="fa fa-phone"></i>
                        <span>0 800 311 011</span>
                    </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="partners">
        <div class="partners-shell">

            <div class="partners-title">
                <span>Наши партнеры</span>
            </div>
            <div class="container">
                <div class="partner-items">
                    <div class="partner-item">
                        <div class="partner-item__container">
                            <img src="images/partners/partner1.png" alt="">
                        </div>
                    </div>
                    <div class="partner-item">
                        <div class="partner-item__container">
                            <img src="images/partners/partner7.jpg" alt="">
                        </div>
                    </div>
                    <div class="partner-item">
                        <div class="partner-item__container">
                            <img src="images/partners/partner2.png" alt="">
                        </div>
                    </div>
                    <div class="partner-item">
                        <div class="partner-item__container">
                            <img src="images/partners/partner3.png" alt="">
                        </div>
                    </div>
                    <div class="partner-item">
                        <div class="partner-item__container">
                            <img src="images/partners/partner4.png" alt="">
                        </div>
                    </div>
                    <div class="partner-item">
                        <div class="partner-item__container">
                            <img src="images/partners/partner5.png" alt="">
                        </div>
                    </div>
                    <div class="partner-item">
                        <div class="partner-item__container">
                            <img src="images/partners/partner6.png" alt="">
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
        <div class="bg-photo-evryday">
            <div class="evryday">
                <div class="evryday-shell">
                    <div class="evryday-content">
                        <div class="evryday-content-shell">
                            <div class="evryday-content-title">
                                Ежедневные предложения по машинам с США!
                            </div>

                            <div class="evryday-content-text1">
                                Получайте ежедневно, выгодные предложения о лотах
                                на аукционах США.
                                
                                
                            </div>

                            <div class="evryday-content-text2">
                                Публикуем только актуальные автомобили с просчетом 
                                стоимости в Украине.
                            </div>
                            <div class="evryday-content-btns">
                                <a class="viber" href="#">  
                                    <svg enable-background="new 0 0 24 24"  viewBox="0 0 24 24"  xmlns="http://www.w3.org/2000/svg"><g ><path d="m23.155 13.893c.716-6.027-.344-9.832-2.256-11.553l.001-.001c-3.086-2.939-13.508-3.374-17.2.132-1.658 1.715-2.242 4.232-2.306 7.348-.064 3.117-.14 8.956 5.301 10.54h.005l-.005 2.419s-.037.98.589 1.177c.716.232 1.04-.223 3.267-2.883 3.724.323 6.584-.417 6.909-.525.752-.252 5.007-.815 5.695-6.654zm-12.237 5.477s-2.357 2.939-3.09 3.702c-.24.248-.503.225-.499-.267 0-.323.018-4.016.018-4.016-4.613-1.322-4.341-6.294-4.291-8.895.05-2.602.526-4.733 1.93-6.168 3.239-3.037 12.376-2.358 14.704-.17 2.846 2.523 1.833 9.651 1.839 9.894-.585 4.874-4.033 5.183-4.667 5.394-.271.09-2.786.737-5.944.526z"/><path d="m12.222 4.297c-.385 0-.385.6 0 .605 2.987.023 5.447 2.105 5.474 5.924 0 .403.59.398.585-.005h-.001c-.032-4.115-2.718-6.501-6.058-6.524z"/><path d="m16.151 10.193c-.009.398.58.417.585.014.049-2.269-1.35-4.138-3.979-4.335-.385-.028-.425.577-.041.605 2.28.173 3.481 1.729 3.435 3.716z"/><path d="m15.521 12.774c-.494-.286-.997-.108-1.205.173l-.435.563c-.221.286-.634.248-.634.248-3.014-.797-3.82-3.951-3.82-3.951s-.037-.427.239-.656l.544-.45c.272-.216.444-.736.167-1.247-.74-1.337-1.237-1.798-1.49-2.152-.266-.333-.666-.408-1.082-.183h-.009c-.865.506-1.812 1.453-1.509 2.428.517 1.028 1.467 4.305 4.495 6.781 1.423 1.171 3.675 2.371 4.631 2.648l.009.014c.942.314 1.858-.67 2.347-1.561v-.007c.217-.431.145-.839-.172-1.106-.562-.548-1.41-1.153-2.076-1.542z"/><path d="m13.169 8.104c.961.056 1.427.558 1.477 1.589.018.403.603.375.585-.028-.064-1.346-.766-2.096-2.03-2.166-.385-.023-.421.582-.032.605z"/></g></svg>                                    <div>viber</div>
                                </a>
                                <a class="telegram" href="#">
                                    <svg   viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m9.417 15.181-.397 5.584c.568 0 .814-.244 1.109-.537l2.663-2.545 5.518 4.041c1.012.564 1.725.267 1.998-.931l3.622-16.972.001-.001c.321-1.496-.541-2.081-1.527-1.714l-21.29 8.151c-1.453.564-1.431 1.374-.247 1.741l5.443 1.693 12.643-7.911c.595-.394 1.136-.176.691.218z"/></svg>
                                    <div>telegram</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="evryday-photo">
                        <img src="images/2phones.png" alt="">
                    </div>
                </div>
            </div>
    </div>
        <style>
          
        </style>
    <div class="contacts" id="contacts">
        <div class="contacts-shell">
            <div class="contacts_title"> контакты</div>

            <div class="contacts-container">
                <div class="contacts-container-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d272.14131210508003!2d30.61330668959331!3d50.40176518595656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4c5bafa84d223%3A0x3b3060d176daa730!2z0JTQvdC10L_RgNC-0LLRgdC60LDRjyDQvdCw0LHQtdGA0LXQttC90LDRjywgMTQsINCa0LjQtdCyLCAwMjAwMA!5e0!3m2!1sru!2sua!4v1605784315758!5m2!1sru!2sua" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div class="contacts-container-form">
                    <form id="contacts-container-form" >
                        <div class="contacts-container-form-row">
                            <input id="name_contacts-input" name="name" placeholder="Ваше имя" class="contacts-container-form-input"/>
                            <input id="phone_contacts-input" name="phone" placeholder="Телефон" class="contacts-container-form-input"/> 
                            <input id="city_contacts-input" name="city" placeholder="Город" class="contacts-container-form-input"/>
                            <input id="budget_contacts-input" name="budget" placeholder="Бюджет" class="contacts-container-form-input"/> 
                        </div>
                        <div class="contacts-container-form-row-textarea">
                            <textarea id="message_contacts-input" name="message" placeholder="Сообщение" class="contacts-container-form-textarea"></textarea>
                        </div>
                        <div class="contacts-container-form-row-btn">
                            <button id="contacts-container-form-btn" type="submit">отправить</button>
                        </div>
                    </form>
                    <div class="contacts-container-form-social">
                        <ul class="contacts-social">
                            <li>
                                <a href="#">
                                    <svg   viewBox="-21 -21 682.66669 682.66669"  xmlns="http://www.w3.org/2000/svg"><path d="m604.671875 0h-569.375c-19.496094.0117188-35.30078125 15.824219-35.296875 35.328125v569.375c.0117188 19.496094 15.824219 35.300781 35.328125 35.296875h306.546875v-247.5h-83.125v-96.875h83.125v-71.292969c0-82.675781 50.472656-127.675781 124.222656-127.675781 35.324219 0 65.679688 2.632812 74.527344 3.808594v86.410156h-50.855469c-40.125 0-47.894531 19.066406-47.894531 47.050781v61.699219h95.9375l-12.5 96.875h-83.4375v247.5h162.796875c19.507813.003906 35.324219-15.804688 35.328125-35.3125 0-.003906 0-.007812 0-.015625v-569.375c-.007812-19.496094-15.824219-35.30078125-35.328125-35.296875zm0 0"/></svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg viewBox="0 0 512.00096 512.00096"  xmlns="http://www.w3.org/2000/svg"><path d="m373.40625 0h-234.8125c-76.421875 0-138.59375 62.171875-138.59375 138.59375v234.816406c0 76.417969 62.171875 138.589844 138.59375 138.589844h234.816406c76.417969 0 138.589844-62.171875 138.589844-138.589844v-234.816406c0-76.421875-62.171875-138.59375-138.59375-138.59375zm-117.40625 395.996094c-77.195312 0-139.996094-62.800782-139.996094-139.996094s62.800782-139.996094 139.996094-139.996094 139.996094 62.800782 139.996094 139.996094-62.800782 139.996094-139.996094 139.996094zm143.34375-246.976563c-22.8125 0-41.367188-18.554687-41.367188-41.367187s18.554688-41.371094 41.367188-41.371094 41.371094 18.558594 41.371094 41.371094-18.558594 41.367187-41.371094 41.367187zm0 0"/><path d="m256 146.019531c-60.640625 0-109.980469 49.335938-109.980469 109.980469 0 60.640625 49.339844 109.980469 109.980469 109.980469 60.644531 0 109.980469-49.339844 109.980469-109.980469 0-60.644531-49.335938-109.980469-109.980469-109.980469zm0 0"/><path d="m399.34375 96.300781c-6.257812 0-11.351562 5.09375-11.351562 11.351563 0 6.257812 5.09375 11.351562 11.351562 11.351562 6.261719 0 11.355469-5.089844 11.355469-11.351562 0-6.261719-5.09375-11.351563-11.355469-11.351563zm0 0"/></svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 	 viewBox="0 0 455 455"  xml:space="preserve"><path style="fill-rule:evenodd;clip-rule:evenodd;" d="M0,0v455h455V0H0z M375.918,337.361c-12.346,36.714-42.54,51.92-78.29,37.357	c-51.488-20.973-95.867-49.188-132.199-85.521c-36.332-36.332-64.548-80.711-85.521-132.199	c-14.563-35.75,0.643-65.944,37.357-78.29c6.591-2.216,13.043-2.371,19.522,0.014c15.657,5.759,55.305,60.331,56.194,76.66	c0.681,12.523-7.829,19.306-16.274,25.037c-15.953,10.837-16.042,24.576-9.225,39.898c6.862,15.419,15.662,28.91,26.79,40.037	c11.127,11.128,24.618,19.928,40.037,26.79c15.323,6.818,29.061,6.729,39.899-9.224c5.731-8.446,12.513-16.956,25.037-16.275	c16.329,0.889,70.901,40.537,76.661,56.194C378.288,324.318,378.134,330.77,375.918,337.361z M324.334,196.112	c-1.376-15.859-8.757-31.218-20.785-43.245c-12.579-12.58-28.911-20.324-45.987-21.804c-4.699-0.407-9.41-0.316-13.997,0.269	c-5.737,0.73-11.012-3.331-11.746-9.084c-0.735-5.752,3.332-11.011,9.084-11.747c6.068-0.774,12.283-0.895,18.474-0.36	c21.993,1.907,42.954,11.808,59.022,27.877c15.517,15.516,25.055,35.503,26.857,56.281c0.499,5.769,0.387,11.572-0.335,17.25	c-0.674,5.303-5.193,9.177-10.402,9.178c-0.442,0-0.888-0.028-1.337-0.084c-5.753-0.731-9.824-5.987-9.093-11.74	C324.622,204.7,324.705,200.396,324.334,196.112z M289.465,199.135c-1.429-16.48-17.423-31.686-34.926-33.203	c-1.393-0.121-2.778-0.154-4.117-0.099c-5.787,0.231-10.685-4.264-10.924-10.058s4.264-10.685,10.059-10.924	c2.229-0.09,4.514-0.038,6.796,0.159c27.967,2.424,51.701,25.402,54.034,52.312c0.213,2.461,0.238,4.925,0.074,7.327	c-0.377,5.542-4.991,9.787-10.465,9.787c-0.24,0-0.481-0.008-0.724-0.025c-5.786-0.394-10.157-5.403-9.763-11.189	C289.599,201.896,289.585,200.521,289.465,199.135z M378.864,221.167c-0.887,5.105-5.322,8.705-10.332,8.705	c-0.597,0-1.201-0.051-1.81-0.157c-5.713-0.992-9.541-6.428-8.548-12.142c1.395-8.029,1.74-16.267,1.028-24.484	c-2.086-24.054-13.062-47.128-30.905-64.971c-18.396-18.396-42.444-29.734-67.715-31.924c-8.2-0.713-16.417-0.429-24.42,0.841	c-5.733,0.908-11.106-2.999-12.015-8.725c-0.908-5.728,2.999-11.107,8.726-12.016c9.687-1.537,19.62-1.88,29.523-1.022	c30.187,2.617,58.864,16.111,80.75,37.997c21.333,21.333,34.465,49.037,36.978,78.007	C380.993,201.298,380.569,211.354,378.864,221.167z"/><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <svg  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m9.417 15.181-.397 5.584c.568 0 .814-.244 1.109-.537l2.663-2.545 5.518 4.041c1.012.564 1.725.267 1.998-.931l3.622-16.972.001-.001c.321-1.496-.541-2.081-1.527-1.714l-21.29 8.151c-1.453.564-1.431 1.374-.247 1.741l5.443 1.693 12.643-7.911c.595-.394 1.136-.176.691.218z"/></svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="footer-shell">
            <div class="footer-meta">
                <div class="footer-meta-container">
                    <img src="images/footer_logo.png" alt="">
                    <div class="footer-meta-info">
                        <div class="footer-meta-place">
                            <div class="footer-meta-city">
                                г. Киев   
                            </div>
                            <div class="footer-meta-street">
                                Днепровская набережная, 14
                            </div>
                        </div>    
                        
                        <div class="footer-meta-place">
                            <div class="footer-meta-city">
                                г. Буча 
                            </div>
                            <div class="footer-meta-street">
                                ул. Жовтнева, 30
                            </div>
                        </div>                            
                    </div>
                </div>
            </div>
            <div class="footer-contacts">
                <a class="phone-link" href="#"><i class="fa fa-phone"></i> 0 800 331 011</a>
                <ul class="footer-social">
                    <li>
                        <a href="#">
                            <svg   viewBox="-21 -21 682.66669 682.66669"  xmlns="http://www.w3.org/2000/svg"><path d="m604.671875 0h-569.375c-19.496094.0117188-35.30078125 15.824219-35.296875 35.328125v569.375c.0117188 19.496094 15.824219 35.300781 35.328125 35.296875h306.546875v-247.5h-83.125v-96.875h83.125v-71.292969c0-82.675781 50.472656-127.675781 124.222656-127.675781 35.324219 0 65.679688 2.632812 74.527344 3.808594v86.410156h-50.855469c-40.125 0-47.894531 19.066406-47.894531 47.050781v61.699219h95.9375l-12.5 96.875h-83.4375v247.5h162.796875c19.507813.003906 35.324219-15.804688 35.328125-35.3125 0-.003906 0-.007812 0-.015625v-569.375c-.007812-19.496094-15.824219-35.30078125-35.328125-35.296875zm0 0"/></svg>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <svg viewBox="0 0 512.00096 512.00096"  xmlns="http://www.w3.org/2000/svg"><path d="m373.40625 0h-234.8125c-76.421875 0-138.59375 62.171875-138.59375 138.59375v234.816406c0 76.417969 62.171875 138.589844 138.59375 138.589844h234.816406c76.417969 0 138.589844-62.171875 138.589844-138.589844v-234.816406c0-76.421875-62.171875-138.59375-138.59375-138.59375zm-117.40625 395.996094c-77.195312 0-139.996094-62.800782-139.996094-139.996094s62.800782-139.996094 139.996094-139.996094 139.996094 62.800782 139.996094 139.996094-62.800782 139.996094-139.996094 139.996094zm143.34375-246.976563c-22.8125 0-41.367188-18.554687-41.367188-41.367187s18.554688-41.371094 41.367188-41.371094 41.371094 18.558594 41.371094 41.371094-18.558594 41.367187-41.371094 41.367187zm0 0"/><path d="m256 146.019531c-60.640625 0-109.980469 49.335938-109.980469 109.980469 0 60.640625 49.339844 109.980469 109.980469 109.980469 60.644531 0 109.980469-49.339844 109.980469-109.980469 0-60.644531-49.335938-109.980469-109.980469-109.980469zm0 0"/><path d="m399.34375 96.300781c-6.257812 0-11.351562 5.09375-11.351562 11.351563 0 6.257812 5.09375 11.351562 11.351562 11.351562 6.261719 0 11.355469-5.089844 11.355469-11.351562 0-6.261719-5.09375-11.351563-11.355469-11.351563zm0 0"/></svg>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 	 viewBox="0 0 455 455"  xml:space="preserve"><path style="fill-rule:evenodd;clip-rule:evenodd;" d="M0,0v455h455V0H0z M375.918,337.361c-12.346,36.714-42.54,51.92-78.29,37.357	c-51.488-20.973-95.867-49.188-132.199-85.521c-36.332-36.332-64.548-80.711-85.521-132.199	c-14.563-35.75,0.643-65.944,37.357-78.29c6.591-2.216,13.043-2.371,19.522,0.014c15.657,5.759,55.305,60.331,56.194,76.66	c0.681,12.523-7.829,19.306-16.274,25.037c-15.953,10.837-16.042,24.576-9.225,39.898c6.862,15.419,15.662,28.91,26.79,40.037	c11.127,11.128,24.618,19.928,40.037,26.79c15.323,6.818,29.061,6.729,39.899-9.224c5.731-8.446,12.513-16.956,25.037-16.275	c16.329,0.889,70.901,40.537,76.661,56.194C378.288,324.318,378.134,330.77,375.918,337.361z M324.334,196.112	c-1.376-15.859-8.757-31.218-20.785-43.245c-12.579-12.58-28.911-20.324-45.987-21.804c-4.699-0.407-9.41-0.316-13.997,0.269	c-5.737,0.73-11.012-3.331-11.746-9.084c-0.735-5.752,3.332-11.011,9.084-11.747c6.068-0.774,12.283-0.895,18.474-0.36	c21.993,1.907,42.954,11.808,59.022,27.877c15.517,15.516,25.055,35.503,26.857,56.281c0.499,5.769,0.387,11.572-0.335,17.25	c-0.674,5.303-5.193,9.177-10.402,9.178c-0.442,0-0.888-0.028-1.337-0.084c-5.753-0.731-9.824-5.987-9.093-11.74	C324.622,204.7,324.705,200.396,324.334,196.112z M289.465,199.135c-1.429-16.48-17.423-31.686-34.926-33.203	c-1.393-0.121-2.778-0.154-4.117-0.099c-5.787,0.231-10.685-4.264-10.924-10.058s4.264-10.685,10.059-10.924	c2.229-0.09,4.514-0.038,6.796,0.159c27.967,2.424,51.701,25.402,54.034,52.312c0.213,2.461,0.238,4.925,0.074,7.327	c-0.377,5.542-4.991,9.787-10.465,9.787c-0.24,0-0.481-0.008-0.724-0.025c-5.786-0.394-10.157-5.403-9.763-11.189	C289.599,201.896,289.585,200.521,289.465,199.135z M378.864,221.167c-0.887,5.105-5.322,8.705-10.332,8.705	c-0.597,0-1.201-0.051-1.81-0.157c-5.713-0.992-9.541-6.428-8.548-12.142c1.395-8.029,1.74-16.267,1.028-24.484	c-2.086-24.054-13.062-47.128-30.905-64.971c-18.396-18.396-42.444-29.734-67.715-31.924c-8.2-0.713-16.417-0.429-24.42,0.841	c-5.733,0.908-11.106-2.999-12.015-8.725c-0.908-5.728,2.999-11.107,8.726-12.016c9.687-1.537,19.62-1.88,29.523-1.022	c30.187,2.617,58.864,16.111,80.75,37.997c21.333,21.333,34.465,49.037,36.978,78.007	C380.993,201.298,380.569,211.354,378.864,221.167z"/><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <svg  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m9.417 15.181-.397 5.584c.568 0 .814-.244 1.109-.537l2.663-2.545 5.518 4.041c1.012.564 1.725.267 1.998-.931l3.622-16.972.001-.001c.321-1.496-.541-2.081-1.527-1.714l-21.29 8.151c-1.453.564-1.431 1.374-.247 1.741l5.443 1.693 12.643-7.911c.595-.394 1.136-.176.691.218z"/></svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
</body>

<script src="./script.js"></script>
</html>

