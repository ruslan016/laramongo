@extends('layouts.app')

@section('content')
<div class="col-md-8">
    <div class="card">
        <div class="card-header">{{ __('Edit Book') }}</div>

        <div class="card-body">
            <form action="{{route('books.update', [$book])}}" method="post">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{$book->name}}">
                </div>
                <div class="form-group">
                    <label for="Pages">Pages</label>
                    <input type="text" name="pages" id="pages" class="form-control" value="{{$book->pages}}">
                </div>
                <div class="form-group">
                    <label for="Price">Price</label>
                    <input type="text" name="price" id="price" class="form-control" value="{{$book->price}}">
                </div>
                <div class="form-group">
                    <label for="author_id">Author</label>
                    <select name="author_id" id="author_id" class="form-control">
                        @forelse($authors as $author)
                        <option value="{{$author->id}}"
                            @if($book->author->id == $author->id) selected @endif
                            >{{$author->name}}
                        </option>
                        @empty
                        @endforelse
                    </select>
                </div>
                <button class="btn btn-primary mt-3">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
