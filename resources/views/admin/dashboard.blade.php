@extends('layouts.admin')


@section('main-content')

    <h1>Welcome to the dashboard</h1>

    <aside class="w-25">
        <nav class="nav flex-column">
            <a href="{{ route('admin.comics') }}" class="nav-link active">Comics</a>
        </nav>
    </aside>
@endsection
