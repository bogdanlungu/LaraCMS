@extends('layouts.master')

@section('content')
    <div class="row">
      <div class="col-md-6 col-md-offset-3">

        <h1>{{ $page->title }}</h1>

          <ul class="page-content">
              <li>{!! $page->content !!} </li>
          </ul>

          <ul class="list-group">
          @foreach ($page->notes as $note)
            <li class="list-group-item">
              <strong>Title:</strong> {{ $note->title }}
              <br><strong>Body:</strong> {{ $note->body }}
              <br><a href="/notes/{{ $note->id }}/edit"><button class="btn btn-success btn-xs" name="button">Edit note</button></a>
            </li>
          @endforeach
          </ul>

          <h3>Add a new note</h3>

          <form method="POST" action="/pages/{{ $page->id }}/notes">
            <div class="form-group">
              <label>Title</label>
              <input type="text" name="title" value="{{ old('title') }}" class="form-control">
            </div>

            <div class="form-group">
              <label>Content</label>
              <textarea name="body" class="form-control">{{ old('content') }}</textarea>
            </div>

            <div class="form-group">
              <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
              <button type="submit" class="btn btn-primary" name="button">Add note</button>
            </div>
          </form>

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
