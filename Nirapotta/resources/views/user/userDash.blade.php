@extends('layouts.app')
@section('content')

@if(Session::get('user')) {{Session::get('user')}}
<form>

    <body>
        <button>
            Arnob
        </button>
    </body>
</form>
<a class="btn btn-danger" href="{{route('logout')}}">Log out </a>
@endif
@endsection