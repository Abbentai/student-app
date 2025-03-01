@extends('main')

@section('content')
    <h2><b>Edit Student {{$student->name}}</b></h2>

    <form action="{{ route('students.update', $student->id) }}" method="POST">
        <div class="formDiv">
            @method('PUT')
            @csrf
            @include('partials.students._form')
        </div>
    </form>

    <a type="button" class="btn btn-secondary btn-lg" href="{{ route('colleges.index') }}">Go Back</a>
@endsection
