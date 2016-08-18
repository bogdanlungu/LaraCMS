@extends('layouts.master')

@section('content')
<div class="row">
  <div class="col-md-6 col-md-offset-3">
    <h1>Homepage for all pages</h1>

    <ul class="pagelinks">
      @foreach ($pages as $page)
        <li><a href="/pages/{{ $page->id }}">{{ $page->title }}</a> </li>
      @endforeach
    </ul>

    @if (count($errors))
       <ul>
         @foreach ($errors->all() as $error)
           <li>{{ $error }}</li>
         @endforeach
       </ul>
    @endif
  </div>
</div>

@stop

@section('footer')
    @parent

    <p>This content is appended to the master footer.</p>
@stop
