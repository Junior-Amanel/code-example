@extends('layouts.ViewTemp')
	<!-- /Header -->
	@section('content')
	<section id="about" style="font-size: 20px;">
      <div class="container aos-init aos-animate" data-aos="fade-up">
        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2" >
            <h3 class="page-header" style="text-align: center;">История</h3>
            <p style="padding-bottom: 100px;">
            Учебно-практический центр «Технолог» является первым в странахСредней Азии прогрессивным образовательным учреждением в системе профессионального образования,</br> 
			созданный на базе КГТУ им.И.Раззакова в рамках проекта Всемирного Банка «Агробизнес и маркетинг»
            </p>


          </div>

        
        </div>

      </div>
    </section>
	<!-- <div class="paragraphs" style="height: 600px;">
		<div>
			<div class="span4">
				<div style="margin-left: 8%;margin-right: 8%;margin-bottom: 5%;">
					<div  style="display:grid;grid-template-columns: 3fr 1fr;">
						
						<div style="margin-left: 40%;">
						<h1 style="text-align: center; padding-top:50px;">История</h1>
						<p style="font-size:26px;text-align: center;">
							Учебно-практический центр «Технолог»</br> является первым в странах</br> Средней Азии
							прогрессивным образовательным учреждением в системе профессионального образования,</br> 
							созданный на базе КГТУ им.
							И.Раззакова в рамках проекта Всемирного Банка
							«Агробизнес и маркетинг»
						</p>
						</div>
						<div>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->

	<div class="section">
		<!-- CONTAINER -->
		<div class="container">
			<!-- ROW -->
			<div class="row">
				<!-- Main Column -->
				<div class="col-md-12">
					<!-- Tab content -->
					<div class="tab-content">
						<!-- tab1 -->
						<div id="tab1" class="tab-pane fade active in">
							<!-- row -->
							<div class="row">
								<!-- Column 1 -->
								@foreach($news as $news)
								<div class="col-md-3 col-sm-6" >
									<!-- ARTICLE -->
									<?php $k = 0  ?>

									<article class="article"style="background-color:#e8e8e8;height:450px;text-align:center;border-radius:12px;">
										@switch($k)
										@case(0)
										<div class="article-img">
											<a href="newspost/{{$news['id']}}">
												<img   style="width: 300px;height:250px;border-radius:12px" src="{{$news['image']}}" class="img-responsive w-100" alt="{{$news['title']}}">
											</a>
											<ul class="article-info">
												<li class="article-type"><i class="fa fa-camera"></i></li>
											</ul>
										</div>
										<div class="article-body">
											<h4 class="article-title"><a href="newspost/{{$news['id']}}">{{$news['title']}}</a></h4>
											<ul class="article-meta">
												<li><i class="fa fa-clock-o" ></i>{{$news['created_at']}}</li>
												<!-- <li><i class="fa fa-comments"></i> 33</li> -->
											</ul>
											<p>{{$news['annons']}}</p>
										</div>
										@break
									</article>
									<!-- /ARTICLE -->
								</div>
								<!-- /Column 1 -->

								<!-- Column 2 -->
								<div class="col-md-3 col-sm-6">
									@case(1)
									<article class="article">
										<div class="article-img">
											<a href="#">
												<img src="{{$news['image']}}" class="img-responsive w-100" alt="{{$news['title']}}">
											</a>
											<ul class="article-info">
												<li class="article-type"><i class="fa fa-camera"></i></li>
											</ul>
										</div>
										<div class="article-body">
											<h4 class="article-title"><a href="#">{{$news['title']}}</a></h4>
											<ul class="article-meta">
												<li><i class="fa fa-clock-o"></i>{{$news['created_at']}}</li>
												<!-- <li><i class="fa fa-comments"></i> 33</li> -->
											</ul>
											<p>{{$news['annons']}}</p>
										</div>
										@break
									</article>
								</div>
								<!-- /Column 2 -->
								<div class="col-md-3 col-sm-6">
									@case(2)
									<article class="article">
										<div class="article-img">
											<a href="#">
												<img src="{{$news['image']}}" class="img-responsive w-100" alt="{{$news['title']}}">
											</a>
											<ul class="article-info">
												<li class="article-type"><i class="fa fa-camera"></i></li>
											</ul>
										</div>
										<div class="article-body">
											<h4 class="article-title"><a href="#">{{$news['title']}}</a></h4>
											<ul class="article-meta">
												<li><i class="fa fa-clock-o"></i>{{$news['created_at']}}</li>
												<!-- <li><i class="fa fa-comments"></i> 33</li> -->
											</ul>
											<p>{{$news['annons']}}</p>
										</div>
										@break
									</article>

								</div>
								<!-- Column 3 -->
								<div class="col-md-3 col-sm-6">
									<article class="article">
										@case(3)
										<div class="article-img">
											<a href="#">
												<img src="{{$news['image']}}" class="img-responsive w-100" alt="{{$news['title']}}">
											</a>
											<ul class="article-info">
												<li class="article-type"><i class="fa fa-camera"></i></li>
											</ul>
										</div>
										<div class="article-body">
											<h4 class="article-title"><a href="#">{{$news['title']}}</a></h4>
											<ul class="article-meta">
												<li><i class="fa fa-clock-o"></i>{{$news['created_at']}}</li>
												<!-- <li><i class="fa fa-comments"></i> 33</li> -->
											</ul>
											<p>{{$news['annons']}}</p>
										</div>
										@break
										@endswitch
										@if ($k >= 2)
										@php
										$k = 0;
										@endphp
										@else
										@php
										$k++;
										@endphp
										@endif



									</article>

								</div>
								@endforeach
								<!-- Column 4 -->

							</div>
						</div>
						<!-- /row -->

						<!-- row -->

						<!-- /row -->
					</div>
					<!-- /tab1 -->
				</div>
				<!-- /tab content -->
			</div>
			<!-- /Main Column -->
		</div>
		<!-- /ROW -->
	</div>
	<!-- /CONTAINER -->
	</div>
	<div>
	</div>



	<div style="width:100%;display:grid;grid-template-columns: 1fr 1fr;margin-bottom:30px; grid-column-gap:10px;grid-row-gap:10px;padding-left:20px;padding-right:20px">
		<div><a href="/meatCeh"><img src="styles/img/et.jpeg" width="100%"></a></div>
		<div><a href="/milkCeh"><img src="styles/img/sut.jpeg" width="100%"></a></div>
		<!-- <div class="w-50"></div> -->
		<div><a href="/fruitCeh"><img src="styles/img/alma.jpeg" width="100%"></a></div>
		<div><a href="/bredCeh"><img src="styles/img/nan.jpeg" width="100%"></a></div>
	</div>




	<!-- Owl Carousel 1 -->
	
	<!-- /Owl Carousel 1 -->
	@endsection

	