
@extends('layouts.admin_layout')

@section('title','Редактировать Новость')

@section('content')

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
        
          <h1 class="m-0">Редактировать Новость:{{$news['title']}}</h1>
        </div>
      </div>
      @if (session('success'))
            <div class="alert alert-siccess" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true" >x</button>
                <h4><i class="icon fa fa-check"></i>{{session('success')}}</h4>
            </div>
       @endif     
    </div>
  </div>
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="col-lg-12">
        <div class="card card-primary">
            <!-- form start -->
            <form action="{{route('news.update', $news['id'])}}"method="POST">
                @csrf
                @method('PUT')
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Название</label>
                  <input type="text" value="{{$news['title']}}" name="title" class="form-control" id="exampleInputEmail1" placeholder="Введите название Декора" required>
                </div>
                <label for="feature_image">Изображение</label>
                <img src="{{$news['image']}}" alt="" class="img-uploaded" style="display: block; width: 300px">
                <input type="text"  name="image" class="form-control" id="feature_image"
                    name="feature_image" value="{{$news['image']}}" readonly>
                <a href="" class="popup_selector" data-inputid="feature_image">Выбрать изображение</a>

                <div class="form-group">                  
                  <label for="exampleInputEmail1">Аннонс</label>
                  <input type="text" value="{{$news['annons']}}" name="annons" class="form-control" id="exampleInputEmail1" placeholder="Введите Длину" required>
                
                  <label for="exampleInputEmail1">Новость</label>
                  <input type="text" value="{{$news['text']}}" name="text" class="form-control" id="exampleInputEmail1" placeholder="Введите Ширину" required>
                </div>
                <div class="form-group">
                      <label>Категория</label>
                      <select name="cat_id" class="custom-select" required>
                        @foreach($categories as $category)
                        <option value="{{$category['id']}}" @if ($category['id']==$news['cat_id']) selected @endif>
                        {{$category['title']}}
                        @endforeach
                      </select>
                </div>
              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Обновить</button>
              </div>
            </form>
          
      </div>
      
    </div>
  </section>
  <!-- /.content -->
  
    
@endsection