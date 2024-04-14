<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Validation;

use function Laravel\Prompts\note;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notes = note::all();
        return view('backend.notes.main', compact('notes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.notes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'pdf' => 'required|file|mimes:pdf|max:5120', // 5MB maximum size
        ]);

        $note = new Note;
        $note->title = $request->title;
        $note->content = $request->content;

        // Handle the file upload (if any)
        if ($request->hasFile('pdf')) {
            $file = $request->file('pdf');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/files'), $fileName);
            $note->pdf = $fileName;
        }

        $note->save();

        return redirect()->route('admin.notes.index')->with('msg', 'Note is added Successfully');
    }


    /**
     * Display the specified resource.
     */


    public function show(Note $note)
    {
        // No need to fetch the note again; it's already available as $note
        return view('backend.notes.view', compact('note'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $note)
    {
        // No need to fetch the note again; it's already available as $note
        return view('backend.notes.edit', compact('note'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Note $note)
    {
        $note->title = $request->title;
        $note->content = $request->content;

        // Handle the file upload (if any)
        if ($request->hasFile('pdf')) {
            $file = $request->file('pdf');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/files'), $fileName);
            $note->pdf = $fileName;
        }

        $note->save();

        return redirect()->route('admin.notes.index')->with('msg', 'Note is update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note)
    {
        if (!is_null($note)) {
            $note->delete();
            return redirect()->route('admin.notes.index')->with('msg', 'Note  has been deleted successfully');
        }
        return redirect()->route('admin.notes.index')->with('msg', 'Note  not found');
    }
}
