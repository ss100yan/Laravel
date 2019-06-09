
@extends('layout')
@extends('Style')

@section('title')
Hello Laravel its Stoyan!
@stop

@section('content')

<hr>
<p>My Name Is {{$firstName}} {{$lastName}},
and you can contact me at
<a href="mailto:{{$email}}">{{$email}}</a>

</p>

@endsection
