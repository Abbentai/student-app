@extends('main')

@section('content')
    <h2><b>Students</b></h2>

    @if ($message = session('message'))
        <div class="alert alert-primary" role="alert">
            {{ $message }}
        </div>
    @endif

    @foreach ($students as $key => $student)
        <div class="card">

            <div class="card-header bg-danger">
                Name: {{ $student->name }}
            </div>

            {{-- This is what aligns the buttons on the side of the card --}}
            <div class="cardSplitter">
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

                {{-- Stacks the buttons vertically --}}
                <div class="flexColumn">
                    {{-- <a class="btn btn-sm btn-circle btn-outline-info" title="Show"><i class="bi bi-eye"></i></i></a> --}}
                    <a class="btn btn-sm btn-circle btn-outline-secondary" title="Edit"
                        href="{{ route('students.edit', $student->id) }}">
                        <i class="bi bi-pencil-square"></i></a>
                    <a class="btn-delete btn btn-sm btn-circle btn-outline-danger" title="Delete"
                        href="{{ route('students.destroy', $student->id) }}"><i class="bi bi-trash"></i></a>
                </div>
            </div>
        </div>
    @endforeach

    <form id="form-delete" method="POST" style="display: none">
        @method('DELETE')
        @csrf
    </form>

    <a type="button" class="btn btn-secondary btn-lg" href="{{ route('students.create') }}"><i class="bi bi-plus"></i> Add
        Student</a>
@endsection
