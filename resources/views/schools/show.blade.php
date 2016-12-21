@extends('layouts.app')
@section('content')
<h3>Votre profil <small>{!! Html::link('school','Retour à la page',['class'=>'btn btn-info btn-xs']) !!}</small></h3>

    ECOLE : {{$school->school_name}}
    <br>
    COMMISSION SCOLAIRE : {{$school->schoolboard->schoolboard_name}}


@endsection