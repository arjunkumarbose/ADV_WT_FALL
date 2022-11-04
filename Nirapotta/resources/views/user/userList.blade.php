@extends('layouts.app')
@section('content')
<table class="table table-border">
    <tr>
        <th>Name</th>
        <th>ID</th>
        <th colspan="2">Action</th>
    </tr>
    @foreach($users as $user)
    <tr>
        <td>{{$user->name}}</td>
        <td>{{$user->id}}</td>
        <td><a href="/userEdit/{{$user->id}}">Details</a></td>
        <td><a href="/userDelete/{{$user->id}}">Delete</a></td>
    </tr>
    @endforeach

</table>
@endsection