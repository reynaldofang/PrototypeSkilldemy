<?php

namespace App\Repositories\Instructor;
use App\Peserta;

interface InstructorInterface{
    public function all();
    public function create($id);
    public function get($id);
    public function update($id, $data);
}

?>