@extends('layouts.app')

@section('page-title', 'Admin Comics')

@section('main_content')
    <div class="container">
        <a href="{{ route('admin.comics.create') }}" class="btn btn-secondary my-3">Add Comic</a>

        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Thumb</th>
                    <th>Price</th>
                    <th>Series</th>
                    <th>Date</th>
                    {{-- <th>Type</th> --}}
                    {{-- <th>Artists</th> --}}
                    {{-- <th>Writers</th> --}}

                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <td>{{ $comic->title }}</td>
                        {{-- <td>{{ strlen($comic->description) < 25 ? $comic->description : substr($comic->description, 0, 24) . '...' }}
                        </td> --}}
                        {{-- <td>{{ strlen($comic->thumb) < 25 ? $comic->thumb : substr($comic->thumb, 0, 24) . '...' }}
                        </td> --}}
                        <td>{{ $comic->price }}</td>
                        <td>{{ $comic->series }}</td>
                        <td>{{ $comic->date }}</td>
                        {{-- <td>{{ $comic->type }}</td>
                        <td>{{ strlen($comic->artists) < 25 ? $comic->artists : substr($comic->artists, 0, 24) . '...' }}
                        </td>
                        <td>{{ strlen($comic->writers) < 25 ? $comic->writers : substr($comic->writers, 0, 24) . '...' }}
                        </td> --}}
                        <td>{{ $comic->created_at }}</td>
                        <td>{{ $comic->updated_at }}</td>

                        <td>
                            <a href="{{ route('admin.show', $comic->id) }}" target="_blank" rel="noopener noreferrer">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </a>
                            <a href="{{ route('admin.edit', $comic->id) }}" target="_blank" rel="noopener noreferrer">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>


@endsection
