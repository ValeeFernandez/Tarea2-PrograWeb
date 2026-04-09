<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publisher;

class PublisherController extends Controller
{
    public function index()
    {
        $publishers = Publisher::all();
        return view('publishers.index', compact('publishers'));
    }

    public function show($id)
    {
        $publisher = Publisher::findOrFail($id);
        $books = $publisher->books;
        return view('publishers.show', compact('publisher', 'books'));
    }

    public function create()
    {
        return view('publishers.create');
    }

    public function store(Request $request)
    {
        Publisher::create($request->all());
        return redirect('/publishers');
    }

    public function edit($id)
    {
        $publisher = Publisher::findOrFail($id);
        return view('publishers.edit', compact('publisher'));
    }

    public function update(Request $request, $id)
    {
        $publisher = Publisher::findOrFail($id);
        $publisher->update($request->all());
        return redirect('/publishers/' . $id);
    }
}