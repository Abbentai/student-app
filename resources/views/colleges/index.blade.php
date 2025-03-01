@extends('main')

@section('content')
    <h2><b>Colleges</b></h2>

    @if ($message = session('message'))
        <div class="alert alert-primary" role="alert">
            {{ $message }}
        </div>
    @endif

    @foreach ($colleges as $key => $college)
        <div class="card">

            <div class="card-header bg-danger">
                Name: {{ $college->name }}
            </div>

            {{-- This is what aligns the buttons on the side of the card --}}
            <div class="cardSplitter">
                <div>
                    <div class="card-body">
                        <p class="card-text text-wrap">Address: {{ $college->address }}</p>
                    </div>
                </div>

                {{-- Stacks the buttons vertically --}}
                <div class="flexColumn">
                    {{-- <a class="btn btn-sm btn-circle btn-outline-info" title="Show"><i class="bi bi-eye"></i></i></a> --}}
                    <a class="btn btn-sm btn-circle btn-outline-secondary" title="Edit"
                        href="{{ route('colleges.edit', $college->id) }}">
                        <i class="bi bi-pencil-square"></i></a>
                    <a class="btn-delete btn btn-sm btn-circle btn-outline-danger" title="Delete"
                        href="{{ route('colleges.destroy', $college->id) }}"><i class="bi bi-trash"></i></a>
                </div>
            </div>
        </div>
    @endforeach

    <form id="form-delete" method="POST" style="display: none">
        @method('DELETE')
        @csrf
    </form>

    <a type="button" class="btn btn-secondary btn-lg buttonAlign" href="{{ route('colleges.create') }}">
        <i class="bi bi-plus"></i>
        Add College</a>
@endsection
