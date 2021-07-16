<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Ремонт квартир</title>
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<nav class="navbar">
		<div class="container">
			<div class="navbar-block">
				<div class="navbar__logo">
					<a href ="#"><img src="img/logo.jpg" alt="Логотип"></a>
				</div>
				<div class="navbar__info">
					<div class="navbar__contacts">
						<span class="navbar__address">Калуга, Москва, МО</span>
						<a href="tel:+7(495)42-251-31" class="navbar__phone">+7 (495) 42-251-31</a>
					</div>
					<button class="button navbar__button" id="button">Перезвоните мне</button>
				</div>
			</div>
		</div>
	</nav>
	
	<main>
		<section class="hero">
			<div class="container">
				<div class="hero-block">
					<div class="hero-text">
						<h1 class="hero-text__title">Внутренняя отделка помещений "под ключ"</h1>
						<span class="hero-text__subtitle">с гарантией качества, прописанной в договоре</span>
						<ul class="hero-list">
							<li class="hero-list__item">
								<div class="hero-list__image">
									<img src="img/hero/clock.svg" alt="clock">
								</div>
								<span class="hero-list__text">Точно соблюдаем сроки</span>
							</li>
							<li class="hero-list__item">
								<div class="hero-list__image">
									<img src="img/hero/calculator.svg" alt="calculator">
								</div>
								<span class="hero-list__text">Рассчитаем смету на работы<br>и материалы в день обращения</span>
							</li>
							<li class="hero-list__item">
								<div class="hero-list__image">
									<img src="img/hero/paint-board.svg" alt="paint-board">
								</div>
								<span class="hero-list__text">Предложим более 100 вариантов<br>исполнения дизайна Вашего жилья</span>
							</li>
						</ul>
					</div>
					<div class="hero-image">
						<img src="img/hero/hero-image.jpg" alt="План квартиры">
					</div>
				</div>
			</div>
		</section>

    <section class="offer section">
      <div class="container">
        <div class="offer-block">
          <h2 class="section-title offer__title">Мы бесплатно разработаем дизайн-проект Вашего жилья и реализуем его!</h2>
          <span class="section-subtitle offer__subtitle">Оставьте заявку на разработку бесплатного дизайн-проекта!</span>
          <form action="mail.php" method="POST" id="offer__form" class="form offer__form">
						<div class="input-group input-group__item">
							<input type="text" autocomplete="off" name="username" class="input offer__input" placeholder="Ваше имя">
						</div>
						<div class="input-group input-group__item">
							<input type="tel" autocomplete="off" name="phone" class="input offer__input phone" placeholder="Ваш телефон">
						</div>
            <button class="button offer__button">Получить бесплатный дизайн-проект</button>
          </form>
          <div class="offer__text">
            <span class="offer__manager">Наш менеджер перезвонит Вам<br>в течение 60 секунд</span>
            <div class="offer__contacts">
              <span class="offer__address">или перезвоните нам сами</span>
              <a href="tel:+7(495)42-251-31" class="offer__phone">+7 (495) 42-251-31</a>
            </div>
          </div>
        </div>
      </div>
		</section>

		<section>
			<div class="modal" id="modal">
				<div class="modal-dialog">
					<button class="modal-dialog__close" id="close">&times;</button>
					<div class="modal-block__price">
						<h4 class="modal-block__title">Узнайте точную стоимость ремонта по телефону!</h4>
						<span class="modal-block__subtitle">Заполните поля ниже - мы свяжемся с Вами</span>
						<form action="mail.php" method="POST" id="modal__form">
							<div class="input-group input-group__modal">
								<input type="text" autocomplete="off" name="username" class="input modal-input__name" placeholder="Ваше имя">
							</div>
							<div class="input-group input-group__modal">
								<input type="tel" autocomplete="off" name="phone" class="input modal-input__phone phone" placeholder="Ваш телефон">
							</div>
							<button class="button modal__button">Узнать стоимость</button>
						</form>
						<span class="modal__address">Или Вы можете перезвонить нам сами<br>по телефону:</span>
						<a href="tel:+78182425131" class="phone modal__phone">+7 (8182) 42-51-31</a>
					</div>
				</div>
			</div>
		</section>

		<section class="section portfolio">
			<div class="container">
				<h2 class="section-title portfolio__title">Работая с 2007 года,<br>мы сделали более 500 ремонтов в квартирах и домах</h2>
				<div class="slider">
					<div class="slider__item"><img class="slider__image" src="img/portfolio/slider-1.jpg" alt="Слайдер 1"></div>
					<div class="slider__item"><img class="slider__image" src="img/portfolio/slider-2.jpg" alt="Слайдер 2"></div>
					<div class="slider__item"><img class="slider__image" src="img/portfolio/slider-3.jpg" alt="Слайдер 3"></div>
					<div class="slider__item"><img class="slider__image" src="img/portfolio/slider-1.jpg" alt="Слайдер 1"></div>
					<div class="slider__item"><img class="slider__image" src="img/portfolio/slider-2.jpg" alt="Слайдер 2"></div>
					<div class="slider__item"><img class="slider__image" src="img/portfolio/slider-3.jpg" alt="Слайдер 3"></div>
				</div>
				<div class="arrows portfolio__arrows">
					<div class="arrows__left">
						<img src="img/portfolio/left-arrow.png" alt="Левая стрелка">
					</div>
					<div class="arrows__right">
							<img src="img/portfolio/right-arrow.png" alt="Правая стрелка стрелка">
					</div>
				</div>
			</div>
		</section>

		<section class="section price">
			<div class="container">
				<h2 class="section-title price__title">У нас очень гибкая система скидок на комплексные работы!</h2>
				<span class="section-subtitle price__subtitle">Прайс на наши услуги</span>
				<div class="cards">
					<div class="card price__card wow fadeInUp" data-wow-delay="0.1s">
						<div class="card__image"><img src="img/price/bathroom.jpg" alt="Ванные комнаты"></div>
						<div class="card__text">
							<h4 class="card__title">Ремонт ванных комнат и с/у</h4>
							<a href="#" class="card__link">Узнать цены</a>
						</div>
					</div>
					<div class="card price__card wow fadeInUp" data-wow-delay="0.2s">
						<div class="card__image"><img src="img/price/living.jpg" alt="Гостинные"></div>
						<div class="card__text">
							<h4 class="card__title">Ремонт комнат и квартир</h4>
							<a href="#" class="card__link">Узнать цены</a>
						</div>
					</div>
					<div class="card price__card wow fadeInUp" data-wow-delay="0.3s">
						<div class="card__image"><img src="img/price/office.jpg" alt="Офисы"></div>
						<div class="card__text">
							<h4 class="card__title">Отделка офисных помещений</h4>
							<a href="#" class="card__link">Узнать цены</a>
						</div>
					</div>
					<div class="card price__card wow fadeInUp" data-wow-delay="0.4s">
						<div class="card__image"><img src="img/price/buildings.jpg" alt="Новостройки"></div>
						<div class="card__text">
							<h4 class="card__title">Ремонт в новостройках</h4>
							<a href="#" class="card__link">Узнать цены</a>
						</div>
					</div>
					<div class="card price__card wow fadeInUp" data-wow-delay="0.5s">
						<div class="card__image"><img src="img/price/kitchen.jpg" alt="Кухни"></div>
						<div class="card__text">
							<h4 class="card__title">Ремонт кухонь</h4>
							<a href="#" class="card__link">Узнать цены</a>
						</div>
					</div>
					<div class="card price__card wow fadeInUp" data-wow-delay="0.6s">
						<div class="card__image"><img src="img/price/houses.jpg" alt="Дачи и коттеджи"></div>
						<div class="card__text">
							<h4 class="card__title">Ремонт дач и коттеджей</h4>
							<a href="#" class="card__link">Узнать цены</a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="section steps">
			<div class="container">
				<h2 class="section-title steps__title">Наши специалисты готовы выехать на замер в любое удобное для Вас время</h2>
				<span class="section-subtitle steps__subtitle">5 шагов до ремонта</span>
				<div class="steps-block wow fadeInUp" data-wow-delay="0.2s">
					<div class="step">
						<div class="step__image">
							<img src="img/steps/woman-with-headset.svg" alt="Консультант">
						</div>
						<p class="step__text">Вы звоните нам<br>или оставляете заявку</p>
					</div>
					<div class="step">
						<div class="step__image">
							<img src="img/steps/clock.svg" alt="Часы">
						</div>
						<p class="step__text">Согласуем удобное<br>для Вас время выезда<br>специалиста на замер</p>
					</div>
					<div class="step">
						<div class="step__image">
							<img src="img/steps/money.svg" alt="Деньги">
						</div>
						<p class="step__text">Рассчитываем смету<br>согласовываем<br>с Вами</p>
					</div>
					<div class="step">
						<div class="step__image">
							<img src="img/steps/folded-document-icon.svg" alt="Документ">
						</div>
						<p class="step__text">Подписываем договор<br>закупаем материал<br>по оптовым ценам</p>
					</div>
					<div class="step">
						<div class="step__image">
							<img src="img/steps/calendar.svg" alt="Календарь">
						</div>
						<p class="step__text">Выполняем ремонт<br>в указанные сроки</p>
					</div>
				</div>
			</div>
		</section>

		<section class="slogan">
      <div class="container">
        <h2 class="slogan__title">Ремонт обойдется Вам дешевле, так как <br> мы используем качественные материалы по оптовым ценам</h2>
      </div>
		</section>

		<section class="section brif">
			<div class="container">
				<div class="brif-block">
					<div class="interview brif__interview">
						<h3 class="interview__title">Мы можем озвучить Вам примерную стоимость работы и материалов по телефону</h3>
						<span class="interview__subtitle">Для этого нужно ответить на 4 вопроса:</span>
						<ul class="interview-list">
							<li class="interview-list__item">
								<span class="interview-list__counter">1.</span>
								<span class="interview-list__text interview-list__first">Какова площадь помещения?</span>
							</li>
							<li class="interview-list__item">
								<span class="interview-list__counter">2.</span>
								<span class="interview-list__text interview-list__second">У Вас новостройка или вторичное жилье?</span>
							</li>
							<li class="interview-list__item">
								<span class="interview-list__counter interview-list__updating">3.</span>
								<span class="interview-list__text interview-list__third">Где находится помещение, в котором будет производиться ремонт?</span>
							</li>
							<li class="interview-list__item">
								<span class="interview-list__counter">4.</span>
								<span class="interview-list__text">Назначение помещения?</span>
							</li>
						</ul>
					</div>
					<div class="form brif__form">
						<h3 class="form__title">Оставьте&nbsp;заявку&nbsp;на&nbsp;бесплатный расчет ремонта по телефону</h3>
						<span class="form__subtitle">Для этого заполните форму ниже</span>
						<form action="mail.php" method="POST" id="brif-form">
							<div class="input-group input-group__brif">
								<input type="text" autocomplete="off" name="username" class="input brif__input" placeholder="Ваше имя">
							</div>
							<div class="input-group input-group__brif">
								<input type="tel" autocomplete="off" name="phone" class="input brif__input phone" placeholder="Ваш телефон">
							</div>
							<div class="input-group input-group__brif">
								<input type="email" autocomplete="off" name="email" class="input brif__input" placeholder="Ваша эл. почта">
							</div>
							<button class="button brif__button">Рассчитать стоимость</button>
							<span class="form__description">Мы перезвоним Вам в течение 60 секунд</span>
						</form>
					</div>
				</div>
			</div>
		</section>
	
	</main>
	<footer class="footer">
    <div class="map" id="map"></div>
    <div class="container">
      <div class="contacts-block">
        <div class="contacts">
          <h3 class="contacts__title">Приезжайте к нам в гости! Проконсультируем Вас по&nbsp;всем вопросам ремонта</h3>
          <ul class="contacts-list">
            <li class="contacts-list__item">
              <span class="contacts-list__icon contacts-list__icon-add">
                <img src="img/contacts/map-placeholder.svg" alt="Метка">
              </span>
              <span class="contacts-list__text">г. Москва <br><span class="contacts-list__strong">ул. Ленинга, д. 10,<br>корпус 2, оф. 308</span></span>
            </li>
            <li class="contacts-list__item">
              <span class="contacts-list__icon contacts-list__icon-add">
                <img src="img/contacts/clock-with-white-face.svg" alt="Часы работы">
              </span>
              <span class="contacts-list__text">Режим работы:<br><span class="contacts-list__strong">с 9:00 до 18:00</span></span>
            </li>
            <li class="contacts-list__item">
              <span class="contacts-list__icon">
                <img src="img/contacts/phone-call-button.svg" alt="Телефон">
              </span>
              <span class="contacts-list__text">Телефон:<br><a href="tel:+7(495)42-251-31" class="contacts-list__phone contacts-list__strong">+ 7 (495) 42-251-31</a></span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

	<button class="scrollup">^</button>

	<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
	<script src="js/modal.js"></script>
	<script src="js/main.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/jquery.maskedinput.min.js"></script>
</body>
</html>