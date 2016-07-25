@extends('layouts.master')

@section('content')
    <h1>Homepage for all pages</h1>

    <ul class="pagelinks">
      @foreach ($pages as $page)
        <li><a href="/pages/{{ $page->id }}">{{ $page->title }}</a> </li>
      @endforeach
    </ul>

@stop

@section('footer')
    @parent

    <p>This content is appended to the master footer.</p>
@stop
