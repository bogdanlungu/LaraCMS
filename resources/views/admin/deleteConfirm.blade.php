@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Confirmation</div>

                <div class="panel-body">
                    The following page was deleted: {{ $page->title }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
