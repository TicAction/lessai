@extends('layouts.app')
@section('content')

    <p>
    <div class="text-right">
        {!! Html::link('/school/create','Page de création',['class'=>'btn btn-primary']) !!}
    </div>
    </p>
    <table class="table table-responsive table-striped">
        <tr>
            <th>Nom de l'école</th>
            <th>Nom de la Cs</th>
            <th>Actions</th>
        </tr>
        @foreach($schools as $school)
            <tr>
                <td>{{$school->school_name}}</td>
                <td> {{$school->schoolboard->schoolboard_name}}</td>
                <td>

                    {!! Html::link('school/'.$school->id.'/edit','Modification',['class'=>'btn btn-primary btn-sm']) !!}
                    ||
                    {!! Form::open(['method' => 'DELETE','route' => ['school.destroy', $school->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                    {!! Form::close() !!}
                    ||
                    {!! Html::link('school/'.$school->id,'Voir',['class'=>'btn btn-success btn-sm']) !!}
                </td>
            </tr>

        @endforeach
    </table>
@endsection