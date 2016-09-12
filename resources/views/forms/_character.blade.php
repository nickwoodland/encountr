<?php /*
/// charcters field  multiselect
/// npcs fields 1-6 (monster dropdown and number in group)
/// conditions field

$table->increments('id');
$table->string('name');
$table->string('conditions'); //i.e darkness, wind, water, etc
$table->smallInteger('round');
$table->timestamps();
*/
?>

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
