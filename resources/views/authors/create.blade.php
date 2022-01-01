@extends('layouts.app')

@section('content')
<div class="col-md-8">
    <div class="card">
        <div class="card-header">{{ __('Create a New Author') }}</div>

        <div class="card-body">
            <form action="{{route('authors.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control">

                    <button class="btn btn-primary mt-3">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
