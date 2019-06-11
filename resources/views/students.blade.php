
@extends('layout')
@extends('Style')

@section('title')
Students!
@stop

@section('content')
<a href="/students/create">add student</a>
<hr>
Here is all the students!
<ul>
@foreach($students as $student)
<li>
<b>Name:</b>{{$student->name}}
<br>
<b>LastName:</b>{{$student->lastname}}
<br>
<b>Phone:</b>{{$student->phone}}
<br>
<a href="/students/{{$student->id}}">View</a>
<li>
@endforeach

</ul>
<hr><hr>
@endsection
