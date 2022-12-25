@extends('layouts.ViewTempNew')
	<!-- /Header -->
	@section('content')
	<section class="ptb-30">
		<div class="container">
			<div class="row">
			
				<div class="col-md-12 col-lg-8">
				
					<div class="ptb-0">
						<a class="mt-10" href=""><i class="mr-5 ion-ios-home"></i><b>Главная</b></a>
						<a class="mt-10" href=""><i class="mlr-10 ion-chevron-right"></i><b>Информация</b></a>
						<a class="mt-10 mb-30 color-ash" href=""><i class="mlr-10 ion-chevron-right"></i>
							<b></b></a>
					</div>
					<div class="p-30 mb-30 card-view">
						<img src="/styles/img/Back.png" alt="">
						<h3 class="mt-30 mb-5"><a href="#"><b>УПЦ «Технолог»</b></a></h3>
						<ul class="list-li-mr-10 color-lite-black">
							<li><i class="mr-5 font-12 ion-clock">10.07.2021</i></li>
						</ul>
						<p class="mt-30">
						20 марта 2013 года приступил к работе Учебно-практический центр пищевой и перерабатывающей промышленности «Технолог» (УПЦ), созданный на базе Кыргызского государственного технического университета им. И. Раззакова в рамках проекта «Агробизнес и маркетинг» Центра конкурентоспособности агробизнеса Кыргызской Республики (ЦКА), при финансовой поддержке Правительства Японии и Всемирного банка. 
					УПЦ «Технолог» – одно из современнейших образовательных учреждений в системе профессионального образования в Кыргызской Республике. Центр оснащен современным технологическим оборудованием, лабораториями по тестированию продовольственного сырья и готовых пищевых продуктов, а также современным мультимедийным залом, предназначенным для обучения студентов – технологов. В центре созданы возможности для повышения квалификации как для преподавателей, так и работников-производства. Кроме того, созданы условия для работы местным консультантам, работающим в пищевой отрасли по выпуску и реализации продукции, отвечающей мировым стандартам. 

						</p>
						<p class="mtb-15">
							В структуре УПЦ «Технолог» имеются: 
					4 мини-производственных цеха: ‒ цех по переработке мяса; ‒ цех по переработке молока; ‒ цех по переработке овощей и фруктов; ‒ цех по переработке продуктов злаковых культур. 
					Лаборатории: ‒ химическая; - аналитическая; ‒ микробиологическая; ‒ сенсорного анализа. Административный корпус; Тренинговые залы; Бытовые помещения для работников производственных цехов
					Пользователями центра являются: студенты, преподаватели, исследователи, представители предприятий пищевой и перерабатывающей отрасли, представители частного сектора, а также физические лица, желающие повысить квалификацию или получить новую профессию. 

</p>
					</div>

				</div>
				
				<div class="col-md-12 col-lg-4">
					<!-- START OF SIDEBAR MOST READ -->
					<div class="mb-30 p-30 card-view">
						<h4 class="p-title"><b>Все новости</b></h4>
						@foreach($newsland as $newsland)
						
						<div class="sided-80x mb-20">
							<div class="s-left">
							<a href="#">
								<img src="{{$newsland['image']}}" alt="">
							</a>
							</div><!-- s-left -->
							
							<div class="s-right">
								<h5><a href="#">
									<b>{{$newsland['title']}}</b></a></h5>
								<ul class="mtb-5 list-li-mr-20 color-lite-black">
									<li><i class="mr-5 font-12 ion-clock"></i>{{$newsland['created_at']}}</li>
								</ul>
							</div><!-- s-left -->
						</div><!-- sided-80x -->
						@endforeach
					</div><!-- card-view -->
					<!-- END OF SIDEBAR MOST READ -->
					
					
					<!-- START OF SIDEBAR NEWSLETTER -->
					
					<!-- END OF SIDEBAR NEWSLETTER -->
					
				</div><!-- col-sm-4 -->
			</div><!-- row -->
		</div><!-- container -->
	</section>
    @endsection