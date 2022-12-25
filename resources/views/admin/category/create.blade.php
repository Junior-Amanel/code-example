@extends('layouts.admin_layout')

@section('title' , 'Добавить Категории')

@section('content')
 
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Добавить Категорию</h1>
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
            <form action="{{route('category.store')}}" method="POST">
                @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Название</label>
                  <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Введите название Статьи" required>
                
                  <!-- <label for="feature_image">Изображение</label>
                  <img src="" alt="" class="img-uploaded" style="display: block; width: 300px">
                  <input type="text" name="image" class="form-control" id="feature_image"
                      name="feature_image" value="" readonly>
                  <a href=""  class="popup_selector" data-inputid="feature_image">Выбрать изображение</a><br> -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Добавить</button>
              </div>
            </form>
          
      </div>
      
    </div>
  </section>
  <!-- /.content -->
  
<!-- <section class="content">
      <div class="container-fluid">
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Select2 (Default Theme)</h3>

            <div class="card-tools">
            </div>
          </div>
 
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Minimal</label>
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">Alabama</option>
                    <option>Alaska</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                  </select>
                </div>
              
                <div class="form-group">
                  <label>Disabled</label>
                  <select class="form-control select2" disabled="disabled" style="width: 100%;">
                    <option selected="selected">Alabama</option>
                    <option>Alaska</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                  </select>
                </div>
            
              </div>
            
              <div class="col-md-6">
                <div class="form-group">
                  <label>Multiple</label>
                  <select class="select2" multiple="multiple" data-placeholder="Select a State" style="width: 100%;">
                    <option>Alabama</option>
                    <option>Alaska</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                  </select>
                </div>
                
                <div class="form-group">
                  <label>Disabled Result</label>
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">Alabama</option>
                    <option>Alaska</option>
                    <option disabled="disabled">California (disabled)</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                  </select>
                </div>
               
              </div>
             
            </div>
            

            <h5>Custom Color Variants</h5>
            <div class="row">
              <div class="col-12 col-sm-6">
                <div class="form-group">
                  <label>Minimal (.select2-danger)</label>
                  <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
                    <option selected="selected">Alabama</option>
                    <option>Alaska</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                  </select>
                </div>
               
              </div>
           
              <div class="col-12 col-sm-6">
                <div class="form-group">
                  <label>Multiple (.select2-purple)</label>
                  <div class="select2-purple">
                    <select class="select2" multiple="multiple" data-placeholder="Select a State" data-dropdown-css-class="select2-purple" style="width: 100%;">
                      <option>Alabama</option>
                      <option>Alaska</option>
                      <option>California</option>
                      <option>Delaware</option>
                      <option>Tennessee</option>
                      <option>Texas</option>
                      <option>Washington</option>
                    </select>
                  </div>
                </div>
              
              </div>
            
            </div>
          
          </div>
         
          <div class="card-footer">
            Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
            the plugin.
          </div>
        </div>
      </div>
</section> -->
@endsection