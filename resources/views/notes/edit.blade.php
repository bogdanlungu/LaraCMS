@extends('layouts.master')

@section('content')

<div class="row">
  <div class="col-md-6 col-md-offset-3">
    <h1>Edit the note</h1>

    <form method="POST" action="/notes/{{ $note->id }}">
      {{ method_field('PATCH') }}
      <div class="form-group">
        <label>Title</label>
        <input type="text" name="title" value="{{ $note->title }}" class="form-control">
      </div>

      <div class="form-group">
        <label>Content</label>
        <textarea name="body" class="form-control">{{ $note->body }}</textarea>
      </div>

      <div class="form-group">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
        <button type="submit" class="btn btn-primary" name="button">Update note</button>
      </div>
    </form>

  </div>
</div>

@stop
