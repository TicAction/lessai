@extends('layouts.app')
@section('content')
    <h3>Nouvelle école</h3>

    {!! Form::model($school,['route' => ['school.update',$school->id],'method'=>'PUT','class'=>'form-horizontal']) !!}
    <div class="form-group">
    {!! Form::label('school_name',"Nom de l'école") !!}
    {!! Form::text('school_name',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
    {!! Form::label('schoolboard_id',"Commission scolaire") !!}
    {!! Form::select('schoolboard_id',$cs,null,['class'=>'form-control']) !!}
    </div>

    {!! Form::submit('soumettre') !!}
    {!! Form::close() !!}
@endsection