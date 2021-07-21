@extends('admin.layout')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Корректировка пациента
        <small>приятные слова..</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
	{{Form::open([
		'route'	=>	['users.update', $user->id],
		'method'	=>	'put',
		'files'	=>	true
	])}}
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Редактируемые данные</h3>
          @include('admin.errors')
        </div>
        <div class="box-body">
          <div class="col-md-6">
            <div class="form-group">
              <label for="sur_name">Фамилия</label>
              <input type="text" class="form-control" id="sur_name" name="sur_name" placeholder="" value="{{$user->sur_name}}">
            </div>

              <div class="form-group">
                <label for="name">Имя</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="" value="{{$user->name}}">
              </div>

                <div class="form-group">
                  <label for="last_name">Отчество</label>
                  <input type="text" class="form-control" id="last_name" name="last_name" placeholder="" value="{{$user->last_name}}">
                </div>


                <div class="form-group">
                  <label for="phone">Телефон</label>
                  <input type="text" class="form-control" id="phone"
                         placeholder="" value="{{$user->phone}}" name="phone">
                </div>

                <div class="form-group">
                  <label for="email">Почта</label>
                  <input type="text" class="form-control" id="email"
                         placeholder="" value="{{$user->email}}" name="email">
                </div>

        </div>
      </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <button class="btn btn-warning pull-right">Изменить</button>
        </div>
        <!-- /.box-footer-->
      </div>
          </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection