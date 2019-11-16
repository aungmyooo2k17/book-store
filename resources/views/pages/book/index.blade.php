@extends('layout.default')
@section('content')
<!-- Page Heading -->
<h1 class="my-4">Books
    <small>All Books</small>
</h1>

<div class="row">
    @foreach($books as $book)
    <div class="col-lg-4 col-sm-6 mb-4">
        <div class="card h-100">
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            <div class="card-body">
                <h4 class="card-title">
                    <a href="/books/{{ $book->id }}">{{ $book->name }}</a>
                </h4>
                <p class="card-text">{{ $book->description }}</p>
            </div>
        </div>
    </div>
    <!-- /.row -->
    @endforeach
</div>

@stop