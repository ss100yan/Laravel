@extends('layout')
@extends('Style')

@section('title')
Hello Laravel its Stoyan!
@stop

@section('content')
<hr><hr><hr><hr>
Hello{{$name}}
<form method="post" action="/users">

<input name="name">

<input name="email">

<input type="submit" value="Submit">
{{csrf_field()}}
</form>
@endsection
