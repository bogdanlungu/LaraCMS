@extends('layouts.master')

@section('content')
    <h1>Main page</h1>

    <?php foreach ($users as $user): ?>
      <li><?php echo $user; ?></li>
    <?php endforeach; ?>

@stop

@section('footer')
    @parent

    <p>This content is appended to the master footer.</p>
@stop
