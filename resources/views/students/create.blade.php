@extends('main')

@section('content')
    <h2><b>Create New Student</b></h2>

    <form action="{{ route('students.store') }}" method="POST">
        <div class="formDiv">
            @csrf
            @include('partials.students._form')
        </div>
    </form>

    <a type="button" class="btn btn-secondary btn-lg" href="{{ route('students.index') }}">Go Back</a>
@endsection
