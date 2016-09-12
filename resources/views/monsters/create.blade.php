@extends('app')


@section('content')

    <h1>Create Monster</h1>

    <hr  />
    <div class="panel panel-default">

        <div class="panel-body">

            {!! Form::model($character = new \App\Monster, ['url' => 'monster']) !!}

                @include('forms/_monster', ['submitButton' => 'Create Monster'])

            {!! Form::close() !!}

        </div>

    </div>


@stop
