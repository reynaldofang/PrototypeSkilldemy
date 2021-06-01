<?php

namespace App\Repositories\ListClass;
use App\Listclass;

interface ListClassInterface{
    public function all();
    public function create($id);
    public function get($id);
    public function update($id, $data);
    public function delete($id);
}


?>