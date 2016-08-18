@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">View pages</div>

                <div class="panel-body">
                  <ul class="pagelinks">
                    @foreach ($pages as $page)
                      <li>{{ $page->title }}
                      <br><a href="/pages/{{ $page->id }}" target="blank"><button class="btn btn-primary btn-xs" name="button">View page</button></a>
                    &nbsp; <a href="/pages/{{ $page->id }}"><button class="btn btn-success btn-xs" name="button">Edit page</button></a>
                    </li>
                    @endforeach
                  </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
