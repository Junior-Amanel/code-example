@extends('layouts.ViewTempNew')

	@section('content')
	<style>
.row {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-flex-wrap: wrap;
      -ms-flex-wrap: wrap;
          flex-wrap: wrap;
  margin-right: -15px;
  margin-left: -15px; 
}
	</style>
	<section class="pb-20">
		<div class="container">
		
			<div class="row"  >
			@foreach($news as $news)
			<div class="col-sm-12 col-md-6"style="height:600px;padding-top:30px;" >
			
							<div class="p-30 card-view mb-30" style="border-radius:18px;height:100%;padding-top:30px;">
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
								<p class="mb-10">{{$news['annons']}}</p>
								<p class="mb-10"></p>
							</div><!-- p-30 card-view -->
			
						</div>
						@endforeach
			</div><!-- row -->
			
		</div><!-- container -->
	</section>

    @endsection