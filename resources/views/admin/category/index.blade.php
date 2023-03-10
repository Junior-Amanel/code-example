@extends('layouts.admin_layout')

@section('title' , 'Все  Категории')

@section('content')
 
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Все  Категории</h1>
        </div>
      </div>   
    </div>
  </div>
  <div class="card-body p-0">
    <table class="table table-striped projects">
        <thead>
            <tr>
                <th style="width: 1%">
                    #ID
                </th>
                <th style="width: 20%">
                     Название
                </th>
            </tr>
        </thead>
        <tbody>
                        @foreach($categories as $category)
                          <tr>
                              <td>
                                  {{$category['id']}}
                              </td>
                              <td>
                                    {{$category['title']}}
                              </td>
                              <td>
                              <td class="project-actions text-right">
                                  <a class="btn btn-info btn-sm" href="{{ route ('category.edit',$category['id'])}}">
                                      <i class="fas fa-pencil-alt">
                                      </i>
                                      Редактировать
                                  </a>
                                  <form action="{{route('category.destroy',$category['id'])}}" method="POST" style="display:inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm delete-btn">
                                        <i class="fas fa-trash">
                                        </i>
                                        Удалить
                                    </button>
                                  </form>
                              </td>
                          </tr>
                        @endforeach
                      </tbody>
    </table>
  </div>
@endsection