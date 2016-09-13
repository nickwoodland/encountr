@extends('app')


@section('content')

    <h1>Update Monster</h1>

    <hr  />
    <div class="panel panel-default">

        <div class="panel-body">

            {!! Form::model($monster,  ['action' => ['MonstersController@update', $monster->id], 'method'=>'PATCH']) !!}

                @include('forms/_monster', ['submitButton' => 'Update Monster'])

            {!! Form::close() !!}

        </div>

    </div>


@stop
