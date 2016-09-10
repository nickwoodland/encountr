@extends ('app')

@section ('content')
    <h1> Encounters</h1>

    <hr  />

    @foreach($encounters as $encounter)
        <article class="panel panel-default">

            <header class="panel-heading">
                <a href="{{ action('EncountersController@show', [$encounter->id]) }}"><h2>{{ $encounter->name }}</h2></a>
            </header>

            <footer class="panel-footer">
                <div class="btn-group btn-group-justified" role="group" aria-label="...">

                    <div class="btn-group" role="group">
                        <a  href="{{ action('EncountersController@edit', ['id' => $encounter->id]) }}" type="button" class="btn btn-default">Edit</a>
                    </div>

                    <div class="btn-group" role="group">
                        {!! Form::model($encounter, ['action' => ['EncountersController@destroy', $encounter->id], 'method'=>'DELETE']) !!}
                            {!! Form::submit("Delete", ['class' => 'btn btn-default']) !!}
                        {!! Form::close() !!}
                    </div>

                </div>
            </footer>

        </article>
    @endforeach

@stop
