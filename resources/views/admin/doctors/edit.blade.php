@extends('admin.layout')

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Изменить данные о враче
        <small>приятные слова..</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
	{{Form::open([
		'route'	=>	['doctors.update', $doctor->id],
		'files'	=>	true,
		'method'	=>	'put'
	])}}
    @csrf
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Обновляем данные о враче</h3>
          @include('admin.errors')
        </div>
        <div class="box-body">
          <div class="col-md-6">

            <div class="form-group">
              <label for="sur_name">Фамилия</label>
              <input type="text" class="form-control" id="sur_name"
                     placeholder="" value="{{$doctor->sur_name}}" name="sur_name">
            </div>

            <div class="form-group">
              <label for="name">Имя</label>
              <input type="text" class="form-control" id="name"
                     placeholder="" value="{{$doctor->name}}" name="name">
            </div>

            <div class="form-group">
              <label for="last_name">Отчество</label>
              <input type="text" class="form-control" id="exampleInputEmail1"
                     placeholder="" value="{{$doctor->last_name}}" name="last_name">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Специальность</label>
              <input type="text" class="form-control" id="last_name"
                     placeholder="" value="{{$doctor->specific}}" name="specific">
            </div>

            <div class="form-group">
              <label for="room">Кабинет</label>
              <input type="text" class="form-control" id="room"
                     placeholder="" value="{{$doctor->room}}" name="room">
            </div>

            <div class="form-group">
              <label>Отделение</label>
              {{Form::select('department_id',$departments,null,
              	['class' => 'form-control select2'])
              }}
            </div>

            <div class="form-group">
              <img src="{{$doctor->getImage()}}" alt="" class="img-responsive" width="200">
              <label for="image">Фото</label>
              <input type="file" id="image" name="image">

              <p class="help-block">Какое-нибудь уведомление о форматах..</p>
            </div>

            <div class="form-group">
              <label for="phone">Телефон</label>
              <input type="text" class="form-control" id="phone"
                     placeholder="" value="{{$doctor->phone}}" name="phone">
            </div>

            <div class="form-group">
              <label for="email">Почта</label>
              <input type="text" class="form-control" id="email"
                     placeholder="" value="{{$doctor->email}}" name="email">
            </div>

              <div class="form-group">
                  <label for="schedule">Расписание</label>
                  <input type="text" class="form-control" id="schedule"
                         placeholder="" value="{{$doctor->getSchedule($doctor->id)}}" name="schedule">
              </div>

        </div>
      </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <button class="btn btn-warning pull-right">Изменить</button>
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
	{{Form::close()}}
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection