@extends('layouts.app')

@section('content')

<div class="col-md-8">
    <div class="card">
        <div class="card-header">{{ __('Books') }}</div>

        <div class="card-body">
            <a href="{{route('books.create')}}" class="btn btn-primary">Create New Book</a>
            <div class="mt-3">
                <h3>List of Books</h3>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Pages</th>
                            <th>Author Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @forelse($books as $book)
                            <td>{{$book->name}}</td>
                            <td>{{$book->price}}</td>
                            <td>{{$book->pages}}</td>
                            <td>{{$book->author->name}}</td>
                            <td>{{$book->name}}</td>
                            <td class="d-flex">
                                <a href="{{route('books.edit',[$book])}}" class="btn btn-warning btn-sm mr-2">Edit</a>
                                <form action="{{route('books.destroy', [$book])}}" method="post">
                                    @csrf
                                    @method("DELETE")
                                    <button class="btn btn-danger btn-sm ml-2">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5">No Book added yet</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
