@extends('pages.layout')

@section('content')

    <!-- Main content -->
    <section class="content">
        <br/>
        <br/>
        <br/> <div class="container">

<h2>Вы записываетесь ко врачу</h2>
    {{Form::open([
        'route'	=>	['record_update', $user->id],
        'files'	=>	true
    ])}}
    @csrf
    <!-- Default box -->
        <div class="box">
            <table class="table table-sm">
                <thead>
                <tr>
                    <th scope="col">Пациент</th>
                    <th scope="col">Врач</th>
                    <th scope="col">Дата записи</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td scope="row">  {{$user->getUser($user->id)}}</td>

                    <td>
                        <div class="form-group">
                            {{Form::select('doctor_id',
                                $doctors,
                                ['class' => 'form-control select2'])
                            }}
                        </div>
                    </td>
                    <td>
                        <div class="box">
                            <div class="box-header" id="datepicker">
                                        <input type="date" class="form-control" name="dateTime" required autocomplete="dateTime">
                                    </div>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
            <div class="box-footer">
                <button class="btn btn-success pull-right">Записаться</button>
            </div>
            <!-- /.box-footer-->
        </div>
        <!-- /.box -->
        {{Form::close()}}
    </section>





</br>
</br>
<div class="container">
@if($records->isEmpty())
    <h3>У Вас нет записей ко врачам</h3>
    @else <h3>Ваши записи:</h3>



    <table class="table table-sm">
        <thead>
        <tr>
            <th scope="col">Номер записи</th>
            <th scope="col">Врач</th>
            <th scope="col">Дата</th>
            <th scope="col">Удалить</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            @foreach($records as $record)
            <td scope="row">{{$record->id}}</td>
            <td>{{$user->getDoctor($record->doctor_id)}}</td>
            <td>{{$record->dateTime}}</td>
            <td>
                {{Form::open(['route'=>['record.destroy', $record->id], 'method'=>'delete'])}}
                <button onclick="return confirm('Вы уверены?')" type="submit" class="delete">X
                    <i class="fa fa-remove"></i>
                </button>
                {{Form::close()}}
            </td>
            </tr>
            @endforeach

        </tbody>
    </table>
    @endif

</div>
    </div>
@endsection
