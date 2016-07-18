@extends('layouts.master')

@section('content')
    <h1>Test page</h1>
@stop

@section('footer')
    @parent

    <p>Test view content appended to the footer.</p>
@stop
