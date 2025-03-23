@extends('main')

@section('content')
    <h2><b>Viewing College {{ $college->name }}</b></h2>

    <div class="card">

        <div class="card-header bg-danger">
            Name: {{ $college->name }}
        </div>

        <div>
            <div class="card-body">
                <p class="card-text text-wrap">Address: {{ $college->address }}</p>
            </div>
        </div>
    </div>

    <a type="button" class="btn btn-secondary btn-lg" href="{{ route('colleges.index') }}">Go Back</a>
@endsection
