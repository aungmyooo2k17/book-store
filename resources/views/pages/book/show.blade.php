@extends('layout.default')

@section('content')
<h1 class="my-4">Book Detail
    <small>Page</small>
  </h1>

  <!-- Portfolio Item Row -->
  <div class="row">

    <div class="col-md-8">
      <img class="img-fluid" src="http://placehold.it/750x500" alt="">
    </div>

    <div class="col-md-4">
      <h3 class="my-3">{{ $book->name }}</h3>
      <p>{{ $book->description }}</p>
      <h3 class="my-3">Logs</h3>
      <ul>
        <li><small>Page</small> - <small>Page</small> - <small>Page</small></li>
        <li><small>Page</small> - <small>Page</small> - <small>Page</small></li>
        <li><small>Page</small> - <small>Page</small> - <small>Page</small></li>
        <li><small>Page</small> - <small>Page</small> - <small>Page</small></li>
      </ul>
      <a class="btn btn-primary" href="/logs/create">Create New Log</a>
    </div>

  </div>
  <!-- /.row -->
@stop