@extends('admin.layout')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Добавить врача
        <small>приятные слова..</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
	{{Form::open([
		'route'	=> 'doctors.store',
		'files'	=>	true
	])}}
    @csrf
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Добавляем врача</h3>
          @include('admin.errors')
        </div>
        <div class="box-body">
          <div class="col-md-6">

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

            <div class="form-group">
              <label for="specific">Специальность</label>
              <input type="text" class="form-control" id="specific" placeholder="" name="specific" value="{{old('specific')}}">
            </div>

            <div class="form-group">
              <label for="room">Кабинет</label>
              <input type="text" class="form-control" id="room" placeholder="" name="room" value="{{old('room')}}">
            </div>

            <div class="form-group">
              <label>Отделение</label>
            {{Form::open([
      'route'	=> 'records.store',
      'files'	=>	true
  ])}}
            @csrf
            <!-- Default box -->
              <div class="box">

            <div class="form-group">
              <label for="views">Фото</label>
              <input type="file" id="views" name="views">
            </div>

            <div class="form-group">
              <label for="phone">Телефон</label>
              <input type="text" class="form-control" id="phone" placeholder="" name="phone" value="{{old('phone')}}">
            </div>

            <div class="form-group">
              <label for="email">Почта</label>
              <input type="text" class="form-control" id="email" placeholder="" name="email" value="{{old('email')}}">
            </div>

              <p class="help-block">Какое-нибудь уведомление</p>
            </div>

            <!-- checkbox -->
            <div class="form-group">
              <label>
                <input type="checkbox" class="minimal" name="is_featured">
              </label>
              <label>
                Рекомендовать
              </label>
            </div>

            <!-- checkbox -->
            <div class="form-group">
              <label>
                <input type="checkbox" class="minimal" name="status">
              </label>
              <label>
                Черновик
              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="exampleInputEmail1">Описание</label>
              <textarea name="description" id="" cols="30" rows="10" class="form-control" >{{old('description')}}</textarea>
          </div>
        </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="exampleInputEmail1">Полный текст</label>
              <textarea name="content" id="" cols="30" rows="10" class="form-control" ></textarea>
          </div>
        </div>
      </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <button class="btn btn-default">Назад</button>
          <button class="btn btn-success pull-right">Добавить</button>
        </div>
        </div>
      </div>
        <!-- /.box-footer-->
      <!-- /.box -->
	{{Form::close()}}
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection