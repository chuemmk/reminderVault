<?php

namespace App\Services;
use App\Models\NoteType;

class NoteTypeService {
    public function getAllNoteTypes() {
        $noteTypes = NoteType::get();

        return $noteTypes;
    }

    public function storeNoteTypes($params)
    {
        $noteTypes = NoteType::create($params);
        return $noteTypes;
    }

    public function findNoteTypesById($id)
    {
        $noteType = NoteType::find($id);

        return $noteType;
    }

    public function updateNoteTypes($params, $id)
    {
        $noteType = $this->findNoteTypesById($id);
        return $noteType->update($params);
    }

}
?>