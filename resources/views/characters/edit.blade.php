@extends('app')


@section('content')

    <h1>Update Character</h1>

    <hr  />
    <div class="panel panel-default">

        <div class="panel-body">

            {!! Form::model($character,  ['action' => ['CharactersController@update', $character->id], 'method'=>'PATCH']) !!}

                @include('forms/_character', ['submitButton' => 'Update Character'])

            {!! Form::close() !!}

        </div>

    </div>


@stop
