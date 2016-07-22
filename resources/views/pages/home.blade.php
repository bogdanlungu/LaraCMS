@extends('layouts.master')

@section('content')
    <h1>Homepage for all pages</h1>

    @foreach ($users as $user)
      <li>{{ $user }} </li>
    @endforeach

@stop

@section('footer')
    @parent

    <p>This content is appended to the master footer.</p>
@stop
