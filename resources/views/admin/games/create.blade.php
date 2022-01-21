@extends('layouts.app')

@section('main_content')
    <div class="container my-5">
        <form action="{{ route('admin.games.store') }}" method="post">
            @csrf

            @include('partials.errors')

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Add game title here"
                    aria-describedby="helpId" value="{{ old('title') }}">
                <small id="helpId" class="text-muted">max 255 characters</small>
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="cover" class="form-label">Game Cover</label>
                <input type="text" class="form-control" name="cover" id="cover" aria-describedby="helpId"
                    placeholder="add url" value="{{ old('cover') }}">
                @error('cover')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" rows="3"
                    value="{{ old('description') }}"></textarea>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection
