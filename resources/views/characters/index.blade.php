@extends ('app')

@section ('content')
    <h1> Characters</h1>

    <hr  />

    @foreach($characters as $character)
        <article class="panel panel-default">

            <header class="panel-heading">
            <a href="{{ action('CharactersController@show', [$character->id]) }}"><h2>{{ $character->name }}</h2></a>
            </header>

            <footer class="panel-footer">
                <div class="btn-group btn-group-justified" role="group" aria-label="...">

                    <div class="btn-group" role="group">
                    <a  href="{{ action('CharactersController@edit', ['id' => $character->id]) }}" type="button" class="btn btn-default">Edit</a>
                    </div>

                    <div class="btn-group" role="group">
                        {!! Form::model($character, ['action' => ['CharactersController@destroy', $character->id], 'method'=>'DELETE']) !!}
                            {!! Form::submit("Delete", ['class' => 'btn btn-default']) !!}
                        {!! Form::close() !!}
                    </div>

                </div>
            </footer>

        </article>
    @endforeach

@stop
