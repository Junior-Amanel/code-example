@extends('layouts.ViewTempNew')
	<!-- /Header -->
	
	@section('content')

	<div class="h-400x h-md-500x h-xs-600x oflow-hidden">
				
				<div class="w-50 w-md-100 float-left float-md-none h-100 h-md-50 h-xs-40 pr-10 pr-md-0 pb-md-10">
				
					<div class="w-100 float-left float-xs-none pos-relative h-100 ">
						<!-- Image as bg-1 -->
						<div class="img-bg bg-8 bg-grad-layer-6"></div>
						
						<!-- <div class="abs-blr color-white p-20">
							<h3 class="mb-10 mb-sm-5 t-upper">
								<a class="hover-grey" href="#"><b>WHAT'S INCLUDED IN CONGRESS' $13 TRILLION SPENDING BILL</b></a></h3>
							<ul class="list-li-mr-10 color-grey">
								<li><i class="mr-5 font-12 ion-clock"></i>Jan 25, 2018</li>

							</ul>
						</div>  -->
						<!--abs-blr -->
					</div><!-- float-left -->
					
				</div><!-- w-50 -->
				<div class="w-50 w-md-100 float-left float-md-none h-100 h-md-50 h-xs-60">
				
					<div class="w-50 w-xs-100 h-100 float-left pr-10 pr-xs-0 pb-xs-10 h-xs-50">
						<div class="h-100 pos-relative">
							<!-- Image as bg-3 -->
							<div class="img-bg bg-9 bg-grad-layer-6"></div>
							
							 <!-- <div class="abs-blr color-white p-20 pr-10">
								<h3 class="mb-10 mb-sm-5 t-upper">
									<a class="hover-grey" href="#"><b>Five places under the falls and above the clouds</b></a></h3>
								<ul class="list-li-mr-10 color-grey">
									<li><i class="mr-5 font-12 ion-clock"></i>Jan 25, 2018</li>
								</ul>
							</div>   -->
							
						</div><!-- h-50 -->
					</div><!-- h-50 -->
					
					<div class="w-50 w-xs-100 h-100 float-left h-xs-50">
						<div class="h-100 pos-relative">
							<!-- Image as bg-4 -->
							<div class="img-bg bg-10 bg-grad-layer-6"></div>
							
							 <!-- <div class="abs-blr color-white p-20 pr-10">
								<h3 class="mb-10 mb-sm-5 t-upper">
									<a class="hover-grey" href="#"><b>THE STORY OF ANTIGA BARBARA RECORD-BREAKING SEASON</b></a></h3>
								<ul class="list-li-mr-20 color-grey">
									<li><i class="mr-5 font-12 ion-clock"></i>Jan 25, 2018</li>
								</ul>
							</div> -->
						</div><!-- h-50 -->
					</div><!-- h-50 -->
					
				</div><!-- w-40 -->
			</div><!-- wrapper -->
		
		
	
	</div><!-- card-view -->


	
	<section class="pb-20">
		<div class="container">
			<div class="row"  >
				<div class="col-md-12 col-lg-6">
					<div class="row" >
						<!-- START OF LIFESTYLE -->
                        @foreach($news as $news)
						<div class="col-sm-12 col-md-6" >
							<div class="p-30 card-view mb-30" style="border-radius:18px;height:480px;">
								<h4 class="p-title"><b>Новость</b></h4>
                                <a href="newspost/{{$news['id']}}">
								<img src="{{$news['image']}}" alt="">
                                </a>
								<h4 class="mt-30"><a href="newspost/{{$news['id']}}">
									<b>{{$news['title']}}</b></a></h4>
								<ul class="mtb-10 list-li-mr-5 color-lite-black">
									<li><i class="mr-5 font-12 ion-clock"></i>{{$news['created_at']}}</li>
								</ul>
								<div class="mtb-15 brdr-grey-1"></div>
								<!-- <p class="mb-10">{{$news['annons']}}</p> -->
							</div><!-- p-30 card-view -->
						</div><!-- col-sm-6 -->
                        @endforeach
						
					</div><!-- row -->
					
					<button type="button" class="btn btn-primary btn-lg btn-block" style="margin-left:50%;"><a href="/allnews">Больше новостей</a></button>
					
				</div><!-- col-sm-8 -->
			</div><!-- row -->
		</div><!-- container -->
	</section>
	
	<!-- <div class="about">
		<div class="about__wrapper">
			<div class="about__main">
				<div class="about__content">
					<div class="about__item">
						<div class="about__item-photo">
							<img src="/styles/img/fruit.jpg" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-8">
					<div class="p-30 mb-30 card-view" style="display: flex;">
						<img src="/styles/img/Back.png" alt="">

					</div>
					
					
					

				</div>
				<div class="col-md-12 col-lg-8" >
				<div class="p-30 mb-30 card-view"style="width: 450px;" >
						<ul class="list-li-mr-10 color-lite-black">	
						</ul>
					<p class="mt-30">УПЦ «Технолог» – одно из современнейших образовательных учреждений в системе 
						профессионального образования в Кыргызской Республике. Центр оснащен современным технологическим оборудованием,
						 лабораториями по тестированию продовольственного сырья и готовых пищевых продуктов, а также современным мультимедийным залом,
						 предназначенным для обучения студентов – технологов. В центре созданы возможности для повышения квалификации как для преподавателей,
						  так и работников-производства. Кроме того, созданы условия для работы местным консультантам,
						 работающим в пищевой отрасли по выпуску и реализации продукции, отвечающей мировым стандартам.

					</p>
					</div>
				</div>
			</div>
	</div>

    @endsection