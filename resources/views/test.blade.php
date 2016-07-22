@extends('layouts.master')

@section('content')
    <h1>Test page</h1>

    @unless (empty($users))
      <p>There are users:</p>
    @endunless
    
    @foreach ($users as $user)
      <li>{{ $user }}</li>   <!-- Meteor Blaze type of syntax -->
    @endforeach
@stop

@section('footer')
    @parent

    <p>Test view content appended to the footer.</p>
@stop
