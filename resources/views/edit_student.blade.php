
@extends('layout')
@extends('Style')

@section('title')
 Add New Student!
@stop

@section('content')
<hr><hr><hr><hr>
Add a Student
<form method="post" action="/students/{{$student->id}}">
{{method_field('PATCH')}}

<input name="name" value="{{$student->name}}" >

<input name="lastname" value="{{$student->lastname}}">

<input name="phone" value="{{$student->phone}}">

<input type="submit" value="Submit">
{{csrf_field()}}
</form>
@endsection
