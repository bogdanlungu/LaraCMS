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
                      <li><a href="/pages/{{ $page->id }}">{{ $page->title }}</a> </li>
                    @endforeach
                  </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
