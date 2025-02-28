@extends('main')

@section('content')
    <h2>Colleges</h2>


    <div class="alert alert-primary" role="alert">
        This will be used later to indicate events!
    </div>

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
                    <a class="btn btn-sm btn-circle btn-outline-info" title="Show"><i class="bi bi-eye"></i></i></a>
                    <a class="btn btn-sm btn-circle btn-outline-secondary" title="Edit"><i
                            class="bi bi-pencil-square"></i></a>
                    <a class="btn-delete btn btn-sm btn-circle btn-outline-danger" title="Delete"><i
                            class="bi bi-trash"></i></a>
                </div>
            </div>
        </div>
    @endforeach

    <button type="button" class="btn btn-secondary btn-lg">+ Add College</button>
@endsection
