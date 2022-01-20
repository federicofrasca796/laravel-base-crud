<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        // ddd($comics);
        return view('comics.admin.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $in = $request->all();
        // $newComic = new Comic();
        // $newComic->title = $in['title'];
        // $newComic->description = $in['description'];
        // $newComic->thumb = $in['thumb'];
        // $newComic->price = $in['price'];
        // $newComic->series = $in['series'];
        // $newComic->date = $in['date'];
        // $newComic->type = $in['type'];
        // $newComic->artists = $in['artists'];
        // $newComic->writers = $in['writers'];
        // $newComic->save();

        $validated = $request->validate([
            'title' => 'required|unique:comics',
            'description' => 'nullable',
            'thumb' => 'nullable',
            'price' => 'required',
            'series' => 'nullable',
            'date' => 'required',
            'type' => 'nullable',
            'artists' => 'nullable',
            'writers' => 'nullable',
        ]);

        Comic::create($validated);

        return redirect()->route('comic');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        // ddd($comic);
        return view('comics.admin.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.admin.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $validated = $request->validate([
            'title' => 'required|unique:comics',
            'description' => 'nullable',
            'thumb' => 'nullable',
            'price' => 'required',
            'series' => 'nullable',
            'date' => 'required',
            'type' => 'nullable',
            'artists' => 'nullable',
            'writers' => 'nullable',
        ]);

        $comic->update($validated);

        return redirect()->route('admin.comics')->with('message', 'Edit successfull!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        //
    }
}