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
                <td>{{ $post->date }}</td>
                <td><a href="#" class="btn btn-success"><i class="fa-solid fa-eye"></i></a></td>
            </tr>

            @endforeach

        </tbody>
    </table>

    <div>
        {{ $posts->Links()}}
    </div>



</div>

@endsection
