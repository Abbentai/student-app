@extends('main')

@section('content')
    <h2><b>Viewing Student {{ $student->name }}</b></h2>

    <div class="card">

        <div class="card-header bg-danger">
            Name: {{ $student->name }}
        </div>

        <div>
            <div class="card-body">
                <p class="card-text text-wrap">Email: {{ $student->name }}</p>
                <p class="card-text text-wrap">Phone Number: {{ $student->phone }}</p>
                <p class="card-text text-wrap">Date of Birth: {{ $student->dob }}</p>
                @if ($student->college != null)
                    <p class="card-text text-wrap">College: {{ $student->college->name }}</p>
                @endif
            </div>
        </div>
    </div>

    <a type="button" class="btn btn-secondary btn-lg" href="{{ route('students.index') }}">Go Back</a>
@endsection
