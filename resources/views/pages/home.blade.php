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

    <h3>Add a new page</h3>

    <form method="POST" action="/pages">
      <div class="form-group">
        <label>Page title</label>
        <input type="text" name="title" class="form-control">
      </div>

      <div class="form-group">
        <label>Content</label>
        <textarea name="content" class="form-control"></textarea>
      </div>

      <div class="form-group">

        <input type="hidden" name="user_id" value="1" />   <!-- Store later in a different way -->
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
        <button type="submit" class="btn btn-primary" name="button">Add page</button>
      </div>
    </form>
  </div>
</div>

@stop

@section('footer')
    @parent

    <p>This content is appended to the master footer.</p>
@stop
