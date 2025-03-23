@extends('main')

@section('content')
    @if ($message = session('message'))
        <div class="alert alert-primary" role="alert">
            {{ $message }}
        </div>
    @endif

    <h2><b>Students</b></h2>


    <div class="filterDiv">
        <b>Filters</b>
        <div class="filters">
            <div class="mb-2">
                @include('partials._collegefilter')
            </div>
            <div class="mb-2">
                @include('partials._namefilter')
            </div>
        </div>
    </div>

    @foreach ($students as $key => $student)
        <div class="card">

            <div class="card-header bg-danger">
                Name: {{ $student->name }}
            </div>

            {{-- This is what aligns the buttons on the side of the card --}}
            <div class="cardSplitter">
                <div>
                    <div class="card-body">
                        <p class="card-text text-wrap">Email: {{ $student->email }}</p>
                        <p class="card-text text-wrap">Phone Number: {{ $student->phone }}</p>
                        <p class="card-text text-wrap">Date of Birth: {{ $student->dob }}</p>
                        @if ($student->college != null)
                            <p class="card-text text-wrap">College: {{ $student->college->name }}</p>
                        @endif
                    </div>
                </div>

                {{-- Stacks the buttons vertically --}}
                <div class="flexColumn">
                    <a class="btn btn-sm btn-circle btn-outline-info" title="Show"
                        href="{{ route('students.view', $student->id) }}"><i class="bi bi-eye"></i></i></a>
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

    <a type="button" class="btn btn-secondary btn-lg buttonAlign" href="{{ route('students.create') }}"><i
            class="bi bi-plus"></i> Add
        Student</a>
@endsection
