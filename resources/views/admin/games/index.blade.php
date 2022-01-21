@extends('layouts.app')

@section('main_content')
    <div class="container my-5">
        <h1>All Posts x admin</h1>

        <a href="{{ route('admin.games.create') }}" class="btn btn-primary">New Game</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Cover image</th>
                    <th>Title</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($games as $game)
                    <tr>
                        <td scope="row">{{ $game->id }}</td>
                        <td><img src="{{ $game->cover }}" alt="" width="80px"></td>
                        <td>{{ $game->title }}</td>
                        <td>
                            <a href="{{ route('admin.games.show', $game->id) }}">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="{{ route('admin.games.edit', $game->id) }}">
                                <i class="fas fa-pen"></i>
                            </a>
                            <a href="{{ route('admin.games.delete', $game->id) }}">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
