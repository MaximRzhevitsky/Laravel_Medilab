@extends('admin.layout')

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Изменить запись {{$id}}
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

    <section>
    <!-- Main content -->
    <div class="content">
    {{Form::open(['route'=>	['records.store',$record->id],'method'	=>	'post'])}}
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
              <label for="num">Number</label>
              <input type="text" class="form-control" id="num"
                     placeholder="" value="{{$record->id}}" name="num">

            <div class="form-group">
              <label for="sur_name">Врач</label>
              <input type="text" class="form-control" id="sur_name"
                     placeholder="" value="{{$doctor}}" name="doctor_name" required autocomplete="doctor_name">

            </div>

            <div class="form-group">
              <label for="dateTime">Дата приема</label>

              <div class="box">
                <div class="box-header" id="datepicker">
                  <input type="date" class="form-control" id="dateTime"
                         placeholder="" value="{{$record->dateTime}}"
                         name="dateTime" required autocomplete="dateTime">
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="sur_name">Пациент</label>
              <input type="text" class="form-control" id="sur_name"
                     placeholder="" value="{{$user}}" name="user_name" required autocomplete="user_name" >
            </div>

          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <button class="btn btn-warning pull-right">Изменить</button>
        </div>
      </div>
    </div>
    </section>
@endsection
