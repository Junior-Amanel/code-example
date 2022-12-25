@extends('layouts.ViewTempNew')
	<!-- /Header -->
	@section('content')
	<section class="ptb-30">
		<div class="container">
			<div class="row">
			
				<div class="col-md-12 col-lg-8">
				
					<div class="ptb-0">
						<a class="mt-10" href=""><i class="mr-5 ion-ios-home"></i><b>Главная</b></a>
						<a class="mt-10" href=""><i class="mlr-10 ion-chevron-right"></i><b>Информация о Технических услугах</b></a>
						<a class="mt-10 mb-30 color-ash" href=""><i class="mlr-10 ion-chevron-right"></i>
							<b></b></a>
					</div>
					<div class="p-30 mb-30 card-view">
						<img src="#" alt="">
						<h3 class="mt-30 mb-5"><a href="#"><b>Список Технических услугах</b></a></h3>
						<ul class="list-li-mr-10 color-lite-black">
							<li><i class="mr-5 font-12 ion-clock">10.07.2021</i></li>
						</ul>
						<p class="mt-30">
							-Консультации по техническому оснащению предприятия</br>
							-Техническое содействие в решении производственных вопросов</br>
							-Техническое содействие в создании новой продукции</br>
							- Организация конференций, круглых столов, встреч с представителями науки и производства в сфере пищевой и перерабатывающей отрасли</br>
							-Лабораторные анализы</br>
							-Обучение и внедрение НАCСР на предприятии</br>
                        </p>
						<p class="mtb-15"></p>
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

   
	

	

	