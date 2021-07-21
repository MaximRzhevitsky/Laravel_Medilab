@extends('admin.layout')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Добавить пациента
        <small>приятные слова..</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
		{{Form::open(['route'	=>	'users.store', 'files'	=>	true])}}
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Добавляем пациента</h3>
          @include('admin.errors')
        </div>
        <div class="box-body">
          <div class="form-group">
            <label for="sur_name">Фамилия</label>
            <input type="text" class="form-control" id="sur_name" placeholder="" name="sur_name" value="{{old('sur_name')}}">
          </div>

          <div class="form-group">
            <label for="name">Имя</label>
            <input type="text" class="form-control" id="name" placeholder="" name="name" value="{{old('name')}}">
          </div>

          <div class="form-group">
            <label for="last_name">Отчество</label>
            <input type="text" class="form-control" id="last_name" placeholder="" name="last_name" value="{{old('last_name')}}">
          </div>

          </div>

          <div class="form-group">
            <label for="phone">Телефон</label>
            <input type="text" class="form-control" id="phone" placeholder="" name="phone" value="{{old('phone')}}">
          </div>

          <div class="form-group">
            <label for="email">Почта</label>
            <input type="text" class="form-control" id="email" placeholder="" name="email" value="{{old('email')}}">
          </div>

        </div>
        </div>
      </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <button class="btn btn-success pull-right">Добавить</button>
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