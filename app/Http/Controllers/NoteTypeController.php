<?php

namespace App\Http\Controllers;

use App\Models\NoteType;
use Illuminate\Http\Request;
use App\Services\NoteTypeService;


class NoteTypeController extends Controller
{
    private $noteTypeService;

    public function __construct(NoteTypeService $noteTypeService)
    {
        $this->noteTypeService = $noteTypeService;

    }

   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notetypes = $this->noteTypeService->getAllNoteTypes();

        return view('notetype.index', compact('notetypes'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('notetype.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $params = $request->all();
        $this->noteTypeService->storeNoteTypes($params);
    
        return redirect()->route('notetype.index')->with('message', 'Note has been added successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, int $id)
    {
        $noteType = $this->noteTypeService->findNoteTypesById($id);

        return view('notetype.show', compact('noteType'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(NoteType $notetype)
    {
        return view('notetype.edit', compact('notetype'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $params = [
            'title' => $request->title,
            'description' => $request->description,
            'mailtemplate_id' => $request->mailtemplate_id
        ];
        
        $this->noteTypeService->updateNoteTypes($params, $id);

        return redirect()->route('notetype.index')->with('message', "Has been updated successfully!");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(NoteType $notetype)
    {
        $notetype->delete();
        return redirect()->route('notetype.index')->with('message', 'Has been deleted successfully!');

    }
}
