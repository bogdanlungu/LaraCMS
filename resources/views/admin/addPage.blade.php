@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Add page</div>

                @if ($success)
                  <h4>{{ $success }}</h4>
                @endif

                <div class="panel-body">
                  <h3>Add a new page</h3>

                  <form method="POST" action="/pages" enctype="multipart/form-data">
                    <div class="form-group">
                      <label>Page title</label>
                      <input type="text" name="title" value="{{ old('title') }}" class="form-control">
                    </div>

                    <div class="form-group">
                      <label>Content</label>
                      <textarea name="content" id="summernote" class="form-control">{{ old('content') }}</textarea>
                    </div>

                    <div class="form-group">
                      <label>Upload file</label>
                      <input type="file" name="file">
                    </div>

                    <div class="form-group">

                      <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                      <button type="submit" class="btn btn-primary" name="button">Add page</button>
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
        </div>
    </div>
</div>
@endsection
