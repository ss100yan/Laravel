
@extends('layout')
@extends('Style')

@section('title')
 Add New Student!
@stop

@section('content')
<hr><hr><hr><hr>
Add a Student
<form method="post" action="/students">

<input name="name">

<input name="lastname">

<input name="phone">

<input type="submit" value="Submit">
{{csrf_field()}}
</form>
@endsection
