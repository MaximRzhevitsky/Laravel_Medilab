@extends('pages.layout')

@section('content')
    <section id="services" class="services">
        <br class="container"></br>

        <div class="section-title">
            <h2>Поздравляем, Вы записались ко врачу</h2>
            <div class="card text-center">
                <div class="card-header">
                    Спасибо!
                </div>
                <div class="card-body">
                    <h5 class="card-title">Ваш врач - {{$user->getDoctor($id_doctor)}}</h5>
                    <h5 class="card-title">Дата приема - {{$dateTime}}</h5>
                    <h5 class="card-title">Номер приема - {{$id_record}}</h5>

                </div>
            </br>

                    <p class="card-text">Письмо отправлено на Вашу почту</p>
                </br>
                <div><a href="{{ route('record') }}" class="btn btn-primary">Зписаться еще</a></div>
                </br>

                {{Form::open(['route'=>['record.destroy', $id_record], 'method'=>'delete'])}}
                <button onclick="return confirm('Вы уверены?')" type="submit" class="btn btn-danger">
                    <i class="fa fa-remove"></i>Отменить запись
                </button>
                {{Form::close()}}



                </div>
                <div class="card-footer text-muted">

                </div>
            </div>
    </section>
    <!-- End Services Section -->
@endsection

