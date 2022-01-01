@extends('layouts.app')

@section('content')
<div class="col-md-8">
    <div class="card">
        <div class="card-header">{{ __('Edit Author') }}</div>

        <div class="card-body">
            <form action="{{route('authors.update', [$author])}}" method="post">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{$author->name}}">

                    <button class="btn btn-primary mt-3">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
