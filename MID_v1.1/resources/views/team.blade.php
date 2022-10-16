@extends('layouts.app')
@section('content')

<h3>Our Team</h3>
@foreach($person1 as $p1)
{{$p1}}
<br>
@endforeach
<br>
@foreach($person2 as $p2)
{{$p2}}
<br>
@endforeach
<br>
@foreach($person3 as $p3)
{{$p3}}
<br>
@endforeach

@endsection