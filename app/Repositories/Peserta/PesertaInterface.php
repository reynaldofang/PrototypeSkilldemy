<?php

namespace App\Repositories\Peserta;
use App\Peserta;


interface PesertaInterface{
    public function all();
    public function create($id);
    public function delete($id);
}

?>