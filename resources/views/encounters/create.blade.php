@extends('app')


@section('content')

    <h1>Create Encounter</h1>

    <hr  />
    <div class="panel panel-default">

        <div class="panel-body">

            {!! Form::model($encounter = new \App\Encounter, ['url' => 'encounter']) !!}

                @include('forms/_encounter', ['submitButton' => 'Create Encounter'])

            {!! Form::close() !!}

        </div>

    </div>


@stop
