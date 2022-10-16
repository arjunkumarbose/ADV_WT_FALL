@extends('layouts.app')
@section('content')
<h2>Services</h2>
@foreach($names as $n)
<li>{{$n}}</li>
@endforeach

@endsection