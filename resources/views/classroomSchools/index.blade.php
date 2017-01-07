@extends("layouts.app")
@section("content")
@foreach($classroomschools as $classroomschool)

    {{$classroomschool->school->school_name}}
    {{$classroomschool->classroom->classroom_name}}
    {{$classroomschool->group}}

    <br>
@endforeach
<br>
<a href="{{url('classe/create')}}"><button class="btn btn-info">Création du profil</button> </a>

@endsection()