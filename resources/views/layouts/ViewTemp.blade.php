<!DOCTYPE html>
<html lang="en" style="padding-left: 10px;padding-right: 10px;">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>UTS Technolog</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700%7CLato:300,400" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="{{ asset('styles/css/bootstrap.min.css')}}"/>

	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="{{ asset('styles/css/owl.carousel.css')}}" />
	<link type="text/css" rel="stylesheet" href="{{ asset('styles/css/owl.theme.default.css')}}" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="{{asset('styles/css/font-awesome.min.css')}}">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet"  href="{{ asset('styles/css/style.css')}}"/>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>

	<!-- Header -->
	<header id="header">
		<!-- Top Header -->
		<div id="top-header">
			<div class="container">
				<div class="header-links">
					<ul>
						<li><a href="#">0772 88 00 22</a></li>
						<li><a href="#">0312 54 43 29</a></li>
					</ul>
				</div>
				<div class="header-social">
					<ul>
						<li><a href="https://www.facebook.com/profile.php?id=100068182416557"><i class="fa fa-facebook"></i></a></li>
						<li><a href="https://instagram.com/upz_technolog?utm_medium=copy_link"><i class="fa fa-instagram"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- /Top Header -->

		<!-- Center Header -->

		<!-- /Center Header -->
		<!-- Nav Header -->
		<div id="nav-header">
			<div class="container">
				<nav id="main-nav">

					<ul class="main-nav nav navbar-nav">
						<li >
                        <a href="/" >Главная</a></li>
							<div class="dropdown">
							<button class="dropbtn">РЕСУРСЫ</button>
							 <div class="dropdown-content">
							<a href="/meatCeh">Цех переработки мяса</a>
							<a href="/milkCeh">Цех переработки молока </a>
							<a href="/fruitCeh">Цех переработки плодов и овощей</a>
							<a href="/bredCeh">Цех производства хлебобулочных, макаронных и кондитерских изделий </a>
							</div> 
							</div>
								<div class="dropdown">
								<button class="dropbtn">ЛАБОРОТОРИИ</button>
								<div class="dropdown-content">
								<a href="/sensLab">Сенсорная лаборатория</a>
								<a href="/mikroLab">Микробиологическая лаборатория</a>
								<a href="/himLab">Химическая лаборатория</a>
								</div>
								</div>
								<div class="dropdown">
								<button class="dropbtn">КУРСЫ</button>
								<div class="dropdown-content">
								<a href="#">Технология молока и молочных продуктов</a>
								<a href="#">Технология переработки плодов и овощей</a>
								<a href="#">Технология мяса и мясных продуктов</a>
								<a href="#">Технология хлебобулочных, кондитерских и макаронных изделий</a>
								<a href="#">Лаборант- микробиолог</a>
								<a href="#">Лаборант-химик</a>
								<a href="#">Бармен - бариста</a>
								<a href="#">Повар универсал</a>
								<a href="#">Повар кондитер</a>
								<a href="#">Администратор кафе и ресторанов</a>
								<a href="#">Официант</a>
								<a href="#">Сыродел</a>
								<a href="#">Сомелье</a>
								<a href="#">Наладчик КИПа</a>
								<a href="#">Наладчик пищевого оборудования </a>
								<a href="#">Фаршесоставитель</a>
								<a href="#">Обвальщик и жиловщик мяса </a>
								</div>
								</div>
								<div class="dropdown">
								<button class="dropbtn">ТЕХ УСЛУГИ</button>
								<div class="dropdown-content">
								<a href="#">Техническое содействие в решении производственных вопросов</a>
								<a href="#">Консультации по техническому оснащению предприятия </a>
								<a href="#">Техническое содействие в создании новой продукции</a>
								<a href="#">Лабораторные анализы</a>
								<a href="#">Обучение и внедрение НАCСР на предприятии</a>
								</div> 
								</div>
								<div class="dropdown">
									<a href="/aboutUs" class="dropbtn">О НАС</a>
								<!-- <button class="dropbtn">О НАС</button> -->
								</div>
							<div class="dropdown">
							<button class="dropbtn">КОНТАКТЫ</button>
							</div>

					</ul>
				</nav>
				<!-- <div class="button-nav">
					<button class="search-collapse-btn"><i class="fa fa-search"></i></button>
					<button class="nav-collapse-btn"><i class="fa fa-bars"></i></button>
					<div class="search-form">
						<form>
							<input class="input" type="text" name="search" placeholder="Search">
						</form>
					</div>
				</div> -->
			</div>
		</div>
		<!-- /Nav Header -->
		<p><img src="{{ asset('styles/img/Back.png')}}" width="100%" height="100%" alt="Иллюстрация"></p>
	</header>
    @yield('content')
    
	<!-- /AD SECTION -->

	<!-- FOOTER -->
	<footer id="footer">
		<!-- Top Footer -->
		<div id="top-footer" class="section">
			<!-- CONTAINER -->
			<div class="container">
				<!-- ROW -->
				<div class="row">
					<!-- Column 1 -->
					<div class="col-md-4">
						<!-- footer about -->
						<div class="footer-widget about-widget">
							<div class="footer-logo">
								<p>Наши Партнеры: </br> КГТУ им.Исхака Раззакова</br> Технический факультет им.Исхака Раззакова</br> Проект GIZ "Профессиональное образование в Центральной Азии"</p>
							</div>
						</div>
						<!-- /footer about -->

						<!-- footer social -->
						<div class="footer-widget social-widget">
							<div class="widget-title">
								<h3 class="title">Подписывайтесь</h3>
							</div>
							<ul>
								<li><a href="https://www.facebook.com/profile.php?id=100068182416557" class="facebook"><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://instagram.com/upz_technolog?utm_medium=copy_link" class="instagram"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#" class="rss"><i class="fa fa-rss"></i></a></li>
								@if (Route::has('login'))
								@auth
								<li><a href="/admin_panel" class="rss"><i class="fa fa-user"></i></a></li>
								@endauth
								@endif

								@guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
							</ul>
						</div>
						<!-- /footer social -->
					</div>
					<!-- /Column 1 -->
					<!-- Column 2 -->
					<div class="col-md-4">
						<!-- footer article -->
						<div class="footer-widget">
							<div class="widget-title">
							<div class="footer-widget about-widget">
							<div class="footer-logo">
								<p>Наши Партнеры: </p>
							</div>
						</div>
							</div>

							<!-- ARTICLE -->
								
							</article>
							<!-- /ARTICLE -->
							<article class="article widget-article">
								<div class="article-img">
									<a href="https://kstu.kg">
										<img src="{{ asset('styles//img/KGTUpng.png')}}" alt="">
									</a>
								</div>
								<div class="article-body">
									</br>
									<h4 class="article-title"><a href="https://kstu.kg">кгту им.И.Раззакова</a></h4>
								</div>
								<div class="visible-lg visible-md">
								
							</div>
							<article class="article widget-article">
							
							<img class="center-block" style="padding-top: 50px;width:350px;padding-bottom:20px;" src="{{ asset('styles//img/Giz.png')}}" alt="">
							<h3 class="article-title"><a href="#">Проект GIZ "Профессиональное образование в Центральной Азии"</a></h3>
								<!-- <ul class="article-meta">
										<li><i class="fa fa-clock-o"></i>Технологический факультет, как и другие старейшие факультеты КГТУ основан в 1954 г. и в течение многих лет — базовый учебный и научный центр в Центральной Азии. С 1961 г. по 1991 г. на факультете осуществлялась подготовка специалистов-пищевиков по кооперированному набору не только для Кыргызстана, но и для Узбекистана, Туркменистана и Таджикистана. Технологический факультет сегодня: — это: свыше 1300 студентов, в числе которых студенты из Казахстана, России, Узбекистана и Туркменистана; 9 – кафедр. Учебный центр "Технолог", Учебный центр "Индустрия кадров", студенческая художественная мастерская "Сайма", Учебный ресторан, Учебные и научные лаборатории, компьютерные классы.</li>

									</ul>
									 -->
							</article>
							<!-- ARTICLE -->

							<!-- /ARTICLE -->

							<!-- ARTICLE -->

							<!-- /ARTICLE -->
						</div>
						<!-- /footer article -->
					</div>
					<!-- /Column 2 -->

					<!-- Column 3 -->
					<div class="col-md-4">
						<!-- footer galery -->

						<!-- /footer galery -->

						<!-- footer tweets -->
						<div class="footer-widget tweets-widget">
							<div class="widget-title">
								<h2 class="title">Связаться с нами</h2>
							</div>
							<ul>
								<li class="tweet">
									<i class="fa fa-google"></i>
									<div class="tweet-body">
										<p><a href="#">Отправляйте сообщения нам на почту</a> <a href="#">Info.technolog@kstu.kg</a></p>
									</div>
								</li>
							</ul>
						</div>
						<!-- /footer tweets -->
					</div>
					<!-- /Column 3 -->
				</div>
				<!-- /ROW -->
			</div>
			<!-- /CONTAINER -->
		</div>
		<!-- /Top Footer -->

		<!-- Bottom Footer -->
		<div id="bottom-footer" class="section">
			<!-- CONTAINER -->
			<div class="container">
				<!-- ROW -->
				<div class="row">
					<!-- footer links -->
					<!-- <div class="col-md-6 col-md-push-6">
							<ul class="footer-links">
								<li><a href="#">About us</a></li>
								<li><a href="#">Contact</a></li>
								<li><a href="#">Advertisement</a></li>
								<li><a href="#">Privacy</a></li>
							</ul>
						</div> -->
					<!-- /footer links -->

					<!-- footer copyright -->

				</div>
				<!-- /footer copyright -->
			</div>
			<!-- /ROW -->
		</div>
		<!-- /CONTAINER -->
		</div>
		<!-- /Bottom Footer -->
	</footer>
	<!-- /FOOTER -->

	<!-- Back to top -->
	<div id="back-to-top"></div>
	<!-- Back to top -->

	<!-- jQuery Plugins -->
	<script src="{{ asset('styles/js/jquery.min.js')}}"></script>
	<script src="{{ asset('styles/js/bootstrap.min.js')}}"></script>
	<script src="{{ asset('styles/js/owl.carousel.min.js')}}"></script>
	<script src="{{ asset('styles/js/main.js')}}"></script>

</body>

</html>