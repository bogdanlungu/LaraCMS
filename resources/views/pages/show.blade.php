@extends('layouts.master')

@section('content')
    <h1>{{ $page->title }}</h1>

    <ul class="page-content">
        <li>{{ $page->content }} </li>
    </ul>

    <ul class="notes">
    @foreach ($page->notes as $note)
      <li>
        <strong>Title:</strong> {{ $note->title }}
        <br><strong>Body:</strong> {{ $note->body }}
      </li>
    @endforeach
    </ul>

@stop

@section('footer')
    @parent

    <p>This content is appended to the master footer.</p>
@stop
