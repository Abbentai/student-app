@extends('main')

@section('content')
    <h2><b>Edit College {{$college->name}}</b></h2>

    <form action="{{ route('colleges.update', $college->id) }}" method="POST">
        <div class="formDiv">
            @method('PUT')
            @csrf
            @include('partials._form')
        </div>
    </form>

    <a type="button" class="btn btn-secondary btn-lg" href="{{ route('colleges.index') }}">Go Back</a>
@endsection
