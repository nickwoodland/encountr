<div class="form-group">

    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class'=>'form-control']) !!}

</div>

<div class="form-group">

    {!! Form::label('init', 'Init:') !!}
    {!! Form::number('init', null, ['class'=>'form-control']) !!}

</div>


<div class="form-group">

    {!! Form::submit($submitButton, ['class' => 'btn btn-primary form-control']) !!}

</div>

@section('footer')
    {{--<script>
        $('#tag_list').select2({
            placeholder: 'Choose tags',
            tags:true,
        });
    </script>--}}
@endsection
