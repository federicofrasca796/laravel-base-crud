@extends('layouts.app')

@section('page-title', 'Add Comic')

@section('main_content')
    <div class="container">
        <h1>EDIT comic</h1>

        <form action="{{ route('admin.update', $comic->id) }}" method="post">
            @csrf
            @method('PUT')

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="mb-3">
                <label for="title" class="form-label">Comic Title</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Insert title"
                    aria-describedby="helpId" required value="{{ $comic->title }}">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Comic description</label>
                <textarea class="form-control" name="description" id="description"
                    rows="3">{{ $comic->description }}</textarea>
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Thumbnail</label>
                <input type="text" class="form-control" name="thumb" id="thumb" aria-describedby="helpId"
                    placeholder="URL here" value="{{ $comic->thumb }}">
                <small id="helpId" class="form-text text-muted">Edit link to comic cover</small>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" name="price" id="price" aria-describedby="helpId"
                    placeholder="12.99€" required value="{{ $comic->price }}">
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" name="series" id="series" aria-describedby="helpId"
                    placeholder="Series" value="{{ $comic->series }}">
            </div>

            <div class="mb-3">
                <label for="date" class="form-label">date</label>
                <input type="text" class="form-control" name="date" id="date" aria-describedby="helpId" placeholder="date"
                    required value="{{ $comic->date }}">
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" name="type" id="type" aria-describedby="helpId" placeholder="Type"
                    value="{{ $comic->type }}">
            </div>

            <div class="mb-3">
                <label for="artists" class="form-label">Artists</label>
                <textarea class="form-control" name="artists" id="artists" rows="3">{{ $comic->artists }}</textarea>
            </div>

            <div class="mb-3">
                <label for="writers" class="form-label">Writers</label>
                <textarea class="form-control" name="writers" id="writers" rows="3">{{ $comic->writers }}</textarea>
            </div>

            <button type="submit" class="my-5 btn btn-outline-secondary">Update</button>
        </form>

        {{-- <input type="submit" value="Save Comic" class="my-5 btn btn-outline-primary"> --}}
    </div>


@endsection
