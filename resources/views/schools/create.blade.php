@extends('layouts.app')
@section('content')
    <h3>Nouvelle école</h3>

    {!! Form::model($school,['route' => 'school.store'],['class'=>'form-horizontal']) !!}
<div class="form-group">
    {!! Form::label('school_name',"Nom de l'école") !!}
    {!! Form::text('school_name',null,['class'=>'form-control']) !!}
</div>
    <div class="form-group">

    {!! Form::label('schoolboard_name',"Commission scolaire") !!}
    {!! Form::text('schoolboard_name',null,['class'=>'form-control']) !!}
        </div>

    {!! Form::submit('soumettre') !!}
    {!! Form::close() !!}
@endsection