@extends('admin.layout')

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Изменить запись ко врачу
        <small>приятные слова..</small>
      </h1>
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
    <div class="content">
    {{Form::open([
      'route'	=>	['records.store'],
      'files'	=>	true,
      'method'	=>	'post'
  ])}}
    @csrf
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Обновляем данные о записи</h3>
          @include('admin.errors')
        </div>
        <div class="box-body">
          <div class="col-md-6">

            <div class="form-group">
              <label for="sur_name">Фамилия врача</label>
              <input type="text" class="form-control" id="sur_name"
                     placeholder="" value="{{$doctor}}" name="sur_name">
            </div>

            <div class="form-group">
              <label for="dateTime">Дата приема</label>
              <input type="text" class="form-control" id="dateTime"
                     placeholder="" value="{{$record->dateTime}}" name="dateTime">
            </div>

            <div class="form-group">
              <label for="sur_name">Фамилия пациента</label>
              <input type="text" class="form-control" id="sur_name"
                     placeholder="" value="{{$user}}" name="sur_name">
            </div>
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <button class="btn btn-warning pull-right">Изменить</button>
        </div>
      </div>

  <!-- /.content-wrapper -->
@endsection
    </div>
  </div>
    </section>
