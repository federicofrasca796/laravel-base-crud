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
                @foreach ($comics as $column)
                    <tr>
                        <td>{{ $column->title }}</td>
                        {{-- <td>{{ strlen($column->description) < 25 ? $column->description : substr($column->description, 0, 24) . '...' }}
                        </td> --}}
                        {{-- <td>{{ strlen($column->thumb) < 25 ? $column->thumb : substr($column->thumb, 0, 24) . '...' }}
                        </td> --}}
                        <td>{{ $column->price }}</td>
                        <td>{{ $column->series }}</td>
                        <td>{{ $column->date }}</td>
                        {{-- <td>{{ $column->type }}</td>
                        <td>{{ strlen($column->artists) < 25 ? $column->artists : substr($column->artists, 0, 24) . '...' }}
                        </td>
                        <td>{{ strlen($column->writers) < 25 ? $column->writers : substr($column->writers, 0, 24) . '...' }}
                        </td> --}}
                        <td>{{ $column->created_at }}</td>
                        <td>{{ $column->updated_at }}</td>

                        <td>
                            <a href="{{ route('comics.admin.show', $comic->id) }}" target="_blank"
                                rel="noopener noreferrer">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </a>
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>


@endsection
