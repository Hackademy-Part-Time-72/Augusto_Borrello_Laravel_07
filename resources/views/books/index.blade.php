@extends('layouts.app')

@section('content')

<h2>Lista Libri</h2>

@if(session('success'))
<div class="alert alert-success">
{{ session('success') }}
</div>
@endif
<table class="table">
    <thead>
        <tr>
            <th>Titolo</th>
            <th>Autore</th>
            <th>Pagine</th>
            <th>Anno</th>
        </tr>
    </thead>
    <tbody>
        @foreach($books as $book)
        <tr>
            <td>{{ $book->title }}</td>
            <td>{{ $book->author }}</td>
            <td>{{ $book->pages }}</td>
            <td>{{ $book->year }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection