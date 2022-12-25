@extends('layouts.admin_layout')

@section('title' , 'Все Новости')

@section('content')

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">

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
                        <th style="width: 30%">
                            Изображение
                        </th>
                        <th>
                            Категория
                        </th>
                        <th>
                            Аннонс
                        </th>
                        <th style="width: 8%" class="text-center">
                            Текст
                        </th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($news as $news)
                    <tr>
                        <td>
                            {{$news['id']}}
                        </td>
                        <td>
                            {{$news['title']}}
                        </td>
                        <td>
                            <img src="{{$news['image']}}" alt="" class="img-uploaded"
                                style="display: block; width: 50px">
                        </td>

                        <td>
                        {{$news->category['title']}}
                        </td>
                        

        </div>
        <td>
            {{$news['annons']}}
        </td>
        <td>
            {{$news['text']}}
        </td>

        <td>
        <td class="project-actions text-right">
            <a class="btn btn-info btn-sm" href="{{ route ('news.edit',$news['id'])}}">
                <i class="fas fa-pencil-alt">
                </i>
                Редактировать
            </a>
            <form action="{{route('news.destroy',$news['id'])}}" method="POST" style="display:inline-block">
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
    <!-- /.card-body -->
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->
@endsection