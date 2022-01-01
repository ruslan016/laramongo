@extends('layouts.app')

@section('content')

<div class="col-md-8">
    <div class="card">
        {{-- <div class="card-header">{{ __('Authors') }}</div> --}}
        <div class="card-header">{{ __('Dashboard') }}</div>

        <div class="card-body">
            @if(session('status'))
            <div class="alert alert-success" role="alert">
                {{session('status')}}
            </div>
            @endif
            {{-- <a href="#" class="btn btn-primary">Create New Author</a>
            <div class="mt-3">
                <h3>List of Authors</h3>
                <ul class="list-group">
                    <li class="list-group-item">
                        Test
                    </li>
                    <li class="list-group-item">
                        Test
                    </li>
                    <li class="list-group-item">
                        Test
                    </li>
                    <li class="list-group-item">
                        Test
                    </li>
                </ul>
            </div> --}}
            {{__('You are logged in!')}}
        </div>

    </div>

</div>
@endsection
