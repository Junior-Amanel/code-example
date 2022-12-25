<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>УТС Технолог</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	
	<!-- Font -->
	<link href="{{ asset('https://fonts.googleapis.com/css?family=Roboto:400,600,700')}}" rel="stylesheet">
    
	<!-- Stylesheets -->
	
	<link href="{{ asset('stylestest/plugin-frameworks/bootstrap.css')}}" rel="stylesheet">
	
	<link href="{{ asset('stylestest/fonts/ionicons.css')}}" rel="stylesheet">
	
		
	<link href="{{ asset('stylestest/common/styles.css')}}" rel="stylesheet">
	
	
</head>
<body>
	
	<header>
		<div class="top-header">
			<div class="container">	
				<div class="oflow-hidden font-9 text-sm-center ptb-sm-5">
				
					<ul class="float-left float-sm-none list-a-plr-10 list-a-plr-sm-5 list-a-ptb-15 list-a-ptb-sm-10 list-a-ptb-xs-5">
						<li>
							<img src="/stylestest/images/logo1.png" alt="" style="width: 50px;height:50px;margin-right:40px;">
							<a class="pl-0 pl-sm-10" href="#">0312 54 43 29<li>
							<a href="#">0550266911</a></li>
					</ul>
					<ul class="float-right float-sm-none font-13 list-a-plr-10 list-a-plr-sm-5 list-a-ptb-15 list-a-ptb-sm-5 color-ash">
						<li><a class="pl-0 pl-sm-10" href="https://www.facebook.com/profile.php?id=100068182416557"><i class="ion-social-facebook"></i></a></li>
						<li><a href="https://instagram.com/upz_technolog?utm_medium=copy_link"><i class="ion-social-instagram"></i></a></li>
					</ul>
					
				</div><!-- top-menu -->
			</div><!-- container -->
		</div>
		
		<div class="bottom-menu">
			<div class="container">
				
				<a class="menu-nav-icon" data-menu="#main-menu" href="#"><i class="ion-navicon"></i></a>
				
				<ul class="main-menu" id="main-menu" style="text-align: center;">
				
					<li class="drop-down"><a href="/">Главная</a>
					</li>
					<li class="drop-down"><a href="/aboutUs">О Нас</a>
					</li>
					<li class="drop-down"><a href="#!">Ресурсы центра<i class="ion-chevron-down"></i></a>
						<ul class="drop-down-menu drop-down-inner">
							<li><a href="/meatCeh">Цех переработки мяса</a></li>
							<li><a href="/milkCeh">Цех переработки молока</a></li>
							<li><a href="/fruitCeh">Цех переработки плодов и овощей</a></li>
							<li><a href="/bredCeh">Цех производства хлебобулочных, макаронных и кондитерских изделий</a></li>
						</ul>
					</li>
					<li class="drop-down"><a href="#!">Лаборатории<i class="ion-chevron-down"></i></a>
						<ul class="drop-down-menu drop-down-inner">
							<li><a href="/sensLab">Лаборатория сенсорного анализа </a></li>
							<li><a href="/himLab">Лаборатория химических исследований</a></li>
							<li><a href="/mikroLab">Микробиологическая лаборатория</a></li>
						</ul>
					</li>
					<li class="drop-down"><a href="#!">Курсы <i class="ion-chevron-down"></i></a>
						<ul class="drop-down-menu drop-down-inner">
							<li><a href="/shortCourse">Краткосрочные</a></li>
							<li><a href="/upperSkillCourse">Курсы повышения квалификации</a></li>
						</ul>
					</li>
					<li class="drop-down"><a href="/technicalservices">Технические услуги</a>
					</li>
					
					<li class="drop-down"><a href="/contact">Контакты</a>

					</li>
				</ul>
				<div class="clearfix"></div>
			</div><!-- container -->
		</div><!-- bottom-menu -->
	</header>
	@yield('content')
    <footer class="bg-191 pos-relative color-ccc bg-primary pt-50">
		<div class="abs-tblr pt-50 z--1 text-center">
			<div class="h-80 pos-relative"><div class="bg-map abs-tblr opacty-1"></div></div>
		</div>
		
		<div class="container" >
			<div class="row">
             
				<div class="col-lg-2 col-md-4 col-sm-4" >	
					<h5 class="f-title"><b>Наши партнеры</b></h5>
					<ul class="mb-30 list-hover list-block list-a-ptb-5">
						<p class="mtb-10">
						КГТУ и.Исхака Раззакова</br>
						Технологический факультет</br>
						Проект GIZ "Профессиональное Образование в Центральной Азии"</br>
						</p>
					</ul>
				</div><!-- col-sm-2 -->
				
             
				<div class="col-lg-4 col-md-8 col-sm-8" style="margin-left:15%" >	
					<div class="pl-10 pl-sm-0">	
						<h5 class="f-title"><b>Партнеры</b></h5>
						
						<div class="sided-80x mb-30">
							<a class="s-left" href="#">
								<img src="{{asset('stylestest/images/kstu.png')}}" alt="">
							
							</a><!-- s-left -->
							
							<div class="s-right pl-10 mb-30 ">
								<p class="mtb-10"></p>
							</div><!-- s-left -->
						</div><!-- sided-80x -->
						
						<div class="sided-80x mb-30">
							<a class="s-left" href="#">
								<img src="{{asset('stylestest/images/techno.png')}}" alt="">
							
							</a><!-- s-left -->
							
							<div class="s-right pl-10 mb-30 ">
								<p class="mtb-10"></p>
								
							</div><!-- s-left -->
						</div><!-- sided-80x -->
						<div class="sided-80x mb-30">
							<a  href="#">
								<img src="{{asset('stylestest/images/giz.png')}}" alt="">
							
							</a><!-- s-left -->
							
							<div class="s-right pl-10 mb-30 ">
								<p class="mtb-10"></p>
							</div><!-- s-left -->
						</div><!-- sided-80x -->
					</div><!-- pl-10 -->
				</div><!-- col-sm-4 -->

				
				
				<div class="col-lg-4 col-md-8 col-sm-8" >		
					<div class="pr-10 pr-sm-0">	
						<h5 class="f-title"><b>Контакты</b></h5>
						
						<div class="sided-80x mb-30">
							<a class="s-left" href="#">
								<img src="/stylestest/images/logo-gmail.png" alt="">
							
							</a>
							
							<div class="s-right pl-10">
								<h5><a href="#"><b>Отправляйте сообщения нам на почту Info.technolog@kstu.kg</b></a></h5>
							</div>
						</div>
					</div>
				</div>
				
			</div><!-- row -->
			
			<div class="mt-20 brdr-ash-1 opacty-4"></div>
			
			<div class="text-center ptb-30">
				<div class="row">
					<div class="col-sm-4">
						<ul class="mtb-10 font-12 list-radial-35 list-li-mlr-3">
							<li><a href="https://www.facebook.com/profile.php?id=100068182416557"><i class="ion-social-facebook"></i></a></li>
							<li><a href="https://instagram.com/upz_technolog?utm_medium=copy_link"><i class="ion-social-instagram"></i></a></li>
						</ul>
					</div><!-- col-sm-3 -->
				</div><!-- row -->
				
							<div class="widget-title">
							</div>
							<ul>
								@if (Route::has('login'))
								@auth
								<li><a href="/admin_panel">Админ панель</a></li>
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
						
			</div><!-- text-center -->
		</div><!-- container -->
		

	</footer>
	
	<!-- SCIPTS -->
	
	<script src="{{ asset('stylestest/plugin-frameworks/jquery-3.2.1.min.js')}}"></script>
	
	<script src="{{ asset('stylestest/plugin-frameworks/tether.min.js')}}"></script>
	
	<script src="{{ asset('stylestest/plugin-frameworks/bootstrap.js')}}"></script>
	
	<script src="{{ asset('stylestest/common/scripts.js')}}"></script>
</body>
</html>