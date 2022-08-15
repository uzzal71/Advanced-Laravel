@extends('template')

@section('content')
    <form action="{{ action('Web\TeamController@store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" id="title" />
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
