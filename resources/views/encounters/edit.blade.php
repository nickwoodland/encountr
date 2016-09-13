@extends('app')


@section('content')

    <h1>Edit Encounter</h1>

    <hr  />
    <div class="panel panel-default">

        <div class="panel-body">

            {!! Form::model($encounter,  ['action' => ['EncountersController@update', $encounter->id], 'method'=>'PATCH']) !!}

                @include('forms/_encounter', ['submitButton' => 'Update Encounter'])

            {!! Form::close() !!}

        </div>

    </div>


@stop
