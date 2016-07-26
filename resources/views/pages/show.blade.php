@extends('layouts.master')

@section('content')
    <div class="row">
      <div class="col-md-6 col-md-offset-3">

        <h1>{{ $page->title }}</h1>

          <ul class="page-content">
              <li>{{ $page->content }} </li>
          </ul>

          <ul class="list-group">
          @foreach ($page->notes as $note)
            <li class="list-group-item">
              <strong>Title:</strong> {{ $note->title }}
              <br><strong>Body:</strong> {{ $note->body }}
            </li>
          @endforeach
          </ul>

          <h3>Add a new note</h3>

          <form method="POST" action="/pages/{{ $page->id }}/notes">
            <div class="form-group">
              <input type="text" name="title" class="form-control">
            </div>

            <div class="form-group">
              <textarea name="body" class="form-control"></textarea>
            </div>

            <div class="form-group">
              <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
              <button type="submit" class="btn btn-primary" name="button">Add note</button>
            </div>
          </form>

      </div>
    </div>
@stop

@section('footer')
    @parent

    <p>This content is appended to the master footer.</p>
@stop
