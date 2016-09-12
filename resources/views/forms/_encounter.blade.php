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
    {{--mutator to serialize this data before inserting in db--}}
    {!! Form::label('conditions', 'Conditions:') !!}
    {!! Form::select('conditions[]', array('D' => 'Magical Darkness', 'S' => 'Slippery', 'R' => 'Reduced Visibility', 'A' => 'AntiMagic Field'), null, ['class'=>'form-control', 'multiple']) !!}
</div>

<div class="form-group">
    {!! Form::label('characters', 'Characters:') !!}
    {!! Form::select('characters', $pcs, null, ['class'=>'form-control', 'multiple']) !!}
</div>

<div class="form-group">

    {!! Form::label('npc1', 'NPC 1:') !!}
    {!! Form::select('npc1', $npcs, null, ['class'=>'form-control']) !!}

    {!! Form::label('npc2', 'NPC 2:') !!}
    {!! Form::select('npc2', $npcs, null, ['class'=>'form-control']) !!}

    {!! Form::label('npc3', 'NPC 3:') !!}
    {!! Form::select('npc3', $npcs, null, ['class'=>'form-control']) !!}

    {!! Form::label('npc4', 'NPC 4:') !!}
    {!! Form::select('npc4', $npcs, null, ['class'=>'form-control']) !!}

    {!! Form::label('npc5', 'NPC 5:') !!}
    {!! Form::select('npc5', $npcs, null, ['class'=>'form-control']) !!}

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
