<?php

namespace App\Repositories\Peserta;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Peserta;

class PesertaRepository implements PesertaInterface
{

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Peserta
     */

    public function create($id)
    {
        $newpeserta = new peserta;
        $newpeserta->name = $name;
        $newpeserta->email = $email;
        $newpeserta->phone = $phone;
        $newpeserta->gender = $gender;
        $newpeserta->password = Hash::make($password);
        $newpeserta->save();
    }

    public function all(){
        return peserta::all();
    }

    public function delete($id){
        $deletepeserta = peserta::find($id);
        $deletepeserta->delete();
    }
    
}

?>
