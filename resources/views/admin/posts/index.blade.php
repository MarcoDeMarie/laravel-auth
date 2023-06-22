@extends('layouts.admin')

@section('content')

<div class="container p-5">
    <h2 class="fs-4 text-secondary my-4">
        Posts
    </h2>



    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th scope="col">#ID</th>
            <th scope="col">Titolo</th>
            <th scope="col">Data</th>
            <th scope="col">Azioni</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post )

            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                @php

                    $date = date_create($post->date);

                @endphp
                <td>{{ date_format($date, 'd/m/Y') }}</td>
                <td>
                    <a href="{{ route('admin.posts.show', $post) }}" class="btn btn-success"><i class="fa-solid fa-eye"></i></a>
                    <a href="#" class="btn btn-primary"><i class="fa-solid fa-pencil"></i></i></a>
                    <a href="#" class="btn btn-danger"><i class="fa-solid fa-xmark"></i></i></i></a>
                </td>
                </tr>

            @endforeach

        </tbody>
    </table>

</div>

@endsection
