@extends('layouts.app')
@section('content')

    {{Form::model($classroomSchools,['route'=>'classe.store'],['class'=>'form-horizontal'])}}

    <div class="form-group">
        {{Form::label('school_id',"Nom de l'école")}}
        {{Form::text('school_name',null,['class'=>'form-control'])}}
    </div>
    <div class="form-group">
        {{Form::label('schoolboard_id',"Commission scolaire")}}
        {{Form::select('schoolboard_name',App\Schoolboard::pluck('schoolboard_name','id'),'1',['class'=>'form-control'])}}
    </div>
    <div class="form-group">
        {{Form::label('classroom_id',"Nom du groupe")}}
        {{Form::text('classroom_name',null,['class'=>'form-control'])}}
    </div>
    <div class="form-group">
        {{Form::label('group',"Numéro de groupe")}}
        {{Form::text('group',null,['class'=>'form-control'])}}
    </div>
    {{Form::submit("Sauvegarder",['class'=>'btn btn-primary'])}}
    {{Form::close()}}

@endsection