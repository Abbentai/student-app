@extends('main')

@section('content')
    <h2><b>Create New College</b></h2>

    <form action="{{ route('colleges.store') }}" method="POST">
        <div class="formDiv">
            @csrf
            @include('partials.colleges._form')
        </div>
    </form>

    <a type="button" class="btn btn-secondary btn-lg" href="{{ route('colleges.index') }}">Go Back</a>
@endsection
