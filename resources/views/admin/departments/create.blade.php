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
        'route'	=> 'departments.store',
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
              <label for="sur_name">title</label>
              <input type="text" class="form-control" id="title" placeholder="" name="title" value="{{old('title')}}">
            </div>

      <!-- /.box-body -->
      <div class="box-footer">
        <button class="btn btn-default">Назад</button>
        <button class="btn btn-success pull-right">Добавить</button>
      </div>
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