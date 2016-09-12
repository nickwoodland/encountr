@extends('app')


@section('content')

    <h1>Create Character</h1>

    <hr  />
    <div class="panel panel-default">

        <div class="panel-body">

            {!! Form::model($character = new \App\Character, ['url' => 'character']) !!}

                @include('forms/_character', ['submitButton' => 'Create Character'])

            {!! Form::close() !!}

        </div>

    </div>


@stop
