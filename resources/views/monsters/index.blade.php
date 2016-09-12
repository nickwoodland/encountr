@extends ('app')

@section ('content')
    <h1> Monsters</h1>

    <hr  />

    @foreach($monsters as $monster)
        <article class="panel panel-default">

            <header class="panel-heading">
                <a href="{{ action('MonstersController@show', [$monster->id]) }}"><h2>{{ $monster->name }}</h2></a>
            </header>

            <footer class="panel-footer">
                <div class="btn-group btn-group-justified" role="group" aria-label="...">

                    <div class="btn-group" role="group">
                        <a  href="{{ action('MonstersController@edit', ['id' => $monster->id]) }}" type="button" class="btn btn-default">Edit</a>
                    </div>

                    <div class="btn-group" role="group">
                        {!! Form::model($monster, ['action' => ['MonstersController@destroy', $monster->id], 'method'=>'DELETE']) !!}
                            {!! Form::submit("Delete", ['class' => 'btn btn-default']) !!}
                        {!! Form::close() !!}
                    </div>

                </div>
            </footer>

        </article>
    @endforeach

@stop
