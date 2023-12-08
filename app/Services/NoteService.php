<?php

namespace App\Services;

use App\Models\Note;

class NoteService {
    public function getAllNotes() {
        $notes = Note::get();

        return $notes;
    }

    public function storeNotes($params)
    {
       $notes = Note::create($params);
       return $notes;
    }

    public function updateNotes($params, $id)
    {
        $note = Note::find($id);
        return $note->update($params);
    }

}