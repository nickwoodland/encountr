<?php
/*
$table->string('name');
$table->smallInteger('init');
$table->smallInteger('max_hp');
$table->smallInteger('to_hit_melee');
$table->smallInteger('to_hit_ranged');
$table->smallInteger('to_hit_spell');
$table->smallInteger('ac');
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

    {!! Form::label('max_hp', 'Max HP:') !!}
    {!! Form::number('max_hp', null, ['class'=>'form-control']) !!}

</div>

<div class="form-group">

    {!! Form::label('to_hit_melee', 'Melee To Hit Bonus:') !!}
    {!! Form::number('to_hit_melee', null, ['class'=>'form-control']) !!}

</div>

<div class="form-group">

    {!! Form::label('to_hit_ranged', 'Ranged To Hit Bonus:') !!}
    {!! Form::number('to_hit_ranged', null, ['class'=>'form-control']) !!}

</div>

<div class="form-group">

    {!! Form::label('to_hit_spell', 'Spell To Hit Bonus:') !!}
    {!! Form::number('to_hit_spell', null, ['class'=>'form-control']) !!}

</div>

<div class="form-group">

    {!! Form::label('ac', 'AC:') !!}
    {!! Form::number('ac', null, ['class'=>'form-control']) !!}

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
