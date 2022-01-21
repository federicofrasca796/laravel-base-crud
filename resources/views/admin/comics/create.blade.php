@extends('layouts.app')

@section('page-title', 'Add Comic')

@section('main_content')
    <div class="container">
        <h1>Add new comic</h1>

        <form action="{{ route('admin.comics.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Comic Title</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Insert title"
                    aria-describedby="helpId" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Comic description</label>
                <textarea class="form-control" name="description" id="description" rows="3"></textarea>
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Thumbnail</label>
                <input type="text" class="form-control" name="thumb" id="thumb" aria-describedby="helpId"
                    placeholder="URL here">
                <small id="helpId" class="form-text text-muted">Add link to comic cover</small>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" name="price" id="price" aria-describedby="helpId"
                    placeholder="12.99€" required>
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" name="series" id="series" aria-describedby="helpId"
                    placeholder="Series">
            </div>

            <div class="mb-3">
                <label for="date" class="form-label">date</label>
                <input type="text" class="form-control" name="date" id="date" aria-describedby="helpId" placeholder="date"
                    required>
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" name="type" id="type" aria-describedby="helpId"
                    placeholder="Type">
            </div>

            <div class="mb-3">
                <label for="artists" class="form-label">Artists</label>
                <textarea class="form-control" name="artists" id="artists" rows="3"></textarea>
            </div>

            <div class="mb-3">
                <label for="writers" class="form-label">Writers</label>
                <textarea class="form-control" name="writers" id="writers" rows="3"></textarea>
            </div>

            <button type="submit" class="my-5 btn btn-outline-primary">Save Comic</button>
        </form>

        {{-- <input type="submit" value="Save Comic" class="my-5 btn btn-outline-primary"> --}}
    </div>


@endsection
