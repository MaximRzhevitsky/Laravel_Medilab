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

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
            <div class="box-header">
              <h3 class="box-title">Записи ко врачам</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID записи</th>
                  <th>Пациент</th>
                  <th>Врач</th>
                  <th>Дата приема</th>
                  <th>Редактировать</th>
                  <th>Удалить</th>
                </tr>
                </thead>
                <tbody>
                @foreach($records as $record)
                <tr>
                  <td>{{$record->id}}</td>
                  <td>{{$record->getUser($record->user_id)}}</td>
                  <td>{{$record->getDoctor($record->doctor_id)}}</td>
                  <td>{{$record->dateTime}}</td>
                  <td>
                    <a href="{{route('records.edit', $record->id)}}" class="fa fa-pencil"></a>
                  </td>
                  <td>

                    {{Form::open(['route'=>['recordAdmin.destroy', $record->id], 'method'=>'delete'])}}
                    <button onclick="return confirm('Вы уверены?')" type="submit" class="delete">
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
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection