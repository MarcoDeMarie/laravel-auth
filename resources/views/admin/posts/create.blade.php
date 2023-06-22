@extends('layouts.admin')

@section('content')

<div class="container p-5">

    <h2>Creazione post</h2>

    <form action="{{ route('admin.posts.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>

            <input
                type="text"
                name="title"
                value="{{ old('title') }}"
                class="form-control"
                id="title"
                placeholder="Titolo"
            >
        </div>

        <div class="mb-3">

            <label for="TEXT" class="form-label">Testo</label>

            <textarea
                name="text"
                id="text"
                class="form-control"
                cols="30"
                rows="10"
                >{{ old('title') }}</textarea>

        </div>

        <div class="mb-3">

            <label for="reading_time" class="form-label">Temo di lettura</label>

            <input
                type="number"
                name="reading_time"
                value="{{ old('reading_time') }}"
                class="form-control"
                id="reading_time"
                placeholder=""
            >

        </div>

        <button class="btn btn-success" type="submit">Invia</button>


    </form>



</div>

@endsection
