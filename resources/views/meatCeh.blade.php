@extends('layouts.ViewTempNew')
	<!-- /Header -->
	@section('content')
	<section class="ptb-30">
		<div class="container">
			<div class="row">
			
				<div class="col-md-12 col-lg-8">
				
					<div class="ptb-0">
						<a class="mt-10" href=""><i class="mr-5 ion-ios-home"></i><b>Главная</b></a>
						<a class="mt-10" href=""><i class="mlr-10 ion-chevron-right"></i><b>Информация о производственных цехах</b></a>
						<a class="mt-10 mb-30 color-ash" href=""><i class="mlr-10 ion-chevron-right"></i>
							<b></b></a>
					</div>
					<div class="p-30 mb-30 card-view">
						<img src="/styles/img/meat.jpg" alt="">
						<h3 class="mt-30 mb-5"><a href="#"><b>Цех по переработке мяса</b></a></h3>
						<ul class="list-li-mr-10 color-lite-black">
							<li><i class="mr-5 font-12 ion-clock">10.07.2021</i></li>
						</ul>
						<p class="mt-30">
						Данный цех оборудован современным оборудованием для изготовления продуктов из мяса (мясные полуфабрикаты, мясные консервы, варенные и копченые колбасы и колбасные изделия). В цехе имеются отделения: - для разделки мяса, оборудованное современным стерилизатором для ножей;  - моечное отделение, оснащенное современным  оборудованием и специальным инвентарем; - отделение приготовления полуфабрикатов , где под рукой у технологов вся современная кухонная техника: мясорубка с подводом холода, куттер и фаршемешалка, оборудование для наполнения колбас, промышленные холодильники и морозильники, камера для шоковой заморозки; - отделение термической обработки, где установлены варочный котел, автоклав, коптильная камера.
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

   