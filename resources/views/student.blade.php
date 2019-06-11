
@extends('layout')
@extends('Style')

@section('title')
Students!
@stop

@section('content')
<a href="/students/{{$student->id}}/edit">Edit</a>

<ul>
<li>
<b>Name:</b>{{$student->name}}
<br>
<b>LastName:</b>{{$student->lastname}}
<br>
<b>Phone:</b>{{$student->phone}}
<li>
</ul>

<hr><hr>
@endsection
