@extends('layouts.ViewTempNew')
	@section('content')
	<section class="ptb-30">
		<div class="container">
			<div class="row">
			
				<div class="col-md-12 col-lg-8">
				
					<div class="ptb-0">
						<a class="mt-10" href=""><i class="mr-5 ion-ios-home"></i><b>Главная</b></a>
						<a class="mt-10" href=""><i class="mlr-10 ion-chevron-right"></i><b>Информация о Курсах</b></a>
						<a class="mt-10 mb-30 color-ash" href=""><i class="mlr-10 ion-chevron-right"></i>
							<b></b></a>
					</div>
					<div class="p-30 mb-30 card-view">
						<img src="/stylestest/images/curs1.jpg" alt="Image">
						<h3 class="mt-30 mb-5"><a href="#"><b>Краткосрочные курсы рабочих профессий</b></a></h3>
						<ul class="list-li-mr-10 color-lite-black">
							<li><i class="mr-5 font-12 ion-clock">10.07.2021</i></li>
						</ul>
						<p class="mt-30">
						Прейскурант цен
на проведение курсов в УПЦ «Технолог» при КГТУ им. И.Разззакова
                        </p>
						<table border="1">
						<tr>
							<th>№</th>
							<th>Наименование направлений 
						(продолжительность 72 часа)
						</th>
							<th>Стоимость (сом)
						</th>
						</tr>
						<tr><td>1</td><td>Повар- универсал</td><td>8500</td></tr>
						<tr><td>2</td><td>Бармен-бариста</td><td>8500</td></tr>
						<tr><td>3</td><td>Пекарь- кондитер </td><td>8500</td></tr>
						<tr><td>4</td><td>Официант 	</td><td>8500</td></tr>
						<tr><td>5</td><td>Бармен	</td><td>8500</td></tr>
						<tr><td>5</td><td>Сыродел	</td><td>8500</td></tr>
						<tr><td>5</td><td>Лаборант-химик	</td><td>8500</td></tr>
						<tr><td>5</td><td>Лаборант-микробиолог	</td><td>8500</td></tr>
						<tr><td>5</td><td>Администратор кафе и ресторанов	</td><td>8500</td></tr>
						<tr><td>5</td><td>Фаршесоставитель	</td><td>8500</td></tr>
						<tr><td>5</td><td>Повар-карвингист	</td><td>8500</td></tr>
						<tr><td>5</td><td>Обвальщик мяса	</td><td>8500</td></tr>
						</table>
						<p class="mtb-15"></p>
					</div>

				</div>
				
				<div class="col-md-12 col-lg-4">
		
					<div class="mb-30 p-30 card-view">
						<h4 class="p-title"><b>Все новости</b></h4>
						@foreach($newsland as $newsland)
						
						<div class="sided-80x mb-20">
							<div class="s-left">
							<a href="#">
								<img src="{{$newsland['image']}}" alt="">
							</a>
							</div>
							
							<div class="s-right">
								<h5><a href="#">
									<b>{{$newsland['title']}}</b></a></h5>
								<ul class="mtb-5 list-li-mr-20 color-lite-black">
									<li><i class="mr-5 font-12 ion-clock"></i>{{$newsland['created_at']}}</li>
								</ul>
							</div>
						</div>
						@endforeach
					</div>
					
					

				</div>
			</div>
		</div>
	</section>
    @endsection

   
	

	

	