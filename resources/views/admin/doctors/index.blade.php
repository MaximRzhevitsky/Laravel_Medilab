@extends('admin.layout')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Blank page
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <section>
      @if(count($errors)>0)
        <div class="alert alert-danger">
          <ul>
            @foreach($errors->all() as $error)
              <li>{{$error}}</li>
            @endforeach
          </ul>
        </div>
      @endif

      @if(session('message'))
        <div class="alert alert-success">
          {{session('message')}}
        </div>
      @endif
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box">
            <div class="box-header">
              <h3 class="box-title">Врачи</h3>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="form-group">
                <a href="{{route('doctors.create')}}" class="btn btn-success">Добавить</a>
              </div>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Фамилия Имя Отчество</th>
                  <th>Специальность</th>
                  <th>Кабинет</th>
                  <th>Отделение</th>
                  <th>Фото</th>
                  <th>Телефон</th>
                  <th>Почта</th>
                  <th>Часы приема</th>
                  <th>Редактировать</th>
                  <th>Удалить</th>
                </tr>
                </thead>
                <tbody>
                @foreach($doctors as $doctor)
                <tr>
                  <td>{{$doctor->id}}</td>
                  <td>{{$doctor->getDoctor($doctor->id)}}</td>
                  <td>{{$doctor->specific}}</td>
                  <td>{{$doctor->room}}</td>
                  <td>{{$doctor->getDepartmenttitle()}}</td>
                  <td><img src="{{$doctor->getImage()}}" alt="" width="100"></td>

                  <td>{{$doctor->phone}}</td>
                  <td>{{$doctor->email}}</td>
                  <td>{{$doctor->getSchedule($doctor->id)}}</td>

                  <td>
                  <a href="{{route('doctors.edit', $doctor->id)}}" class="fa fa-pencil"></a>
                  </td>

                  <td>
                  {{Form::open(['route'=>['doctors.destroy', $doctor->id], 'method'=>'delete'])}}
	                  <button onclick="return confirm('are you sure?')" type="submit" class="delete">
	                   <i class="fa fa-remove"></i>
	                  </button>

	                   {{Form::close()}}
                  </td>
                </tr>
                @endforeach

              </table>
            </div>
            <!-- /.box-body -->
          </div>
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection