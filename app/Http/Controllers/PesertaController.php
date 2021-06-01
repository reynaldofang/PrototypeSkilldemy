<?php

namespace App\Http\Controllers;

use App\Peserta as PesertaModel;
use App\Repositories\Peserta\PesertaRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class PesertaController extends Controller
{

    
    private $pesertaRepo;

    public function __construct(PesertaRepository $repo)
    {
        $this->pesertaRepo = $repo;
    }

    public function create(){
        return view('auth.register');
    }

    public function save(Request $request){
        $peserta = new PesertaModel;
        $peserta->name = $request->name;
        $peserta->email = $request->email;
        $peserta->phone = $request->phone;
        $peserta->gender = $request->gender;
        $peserta->password = Hash::make($request->password);
        $peserta->save();
        return redirect(route('pesertaindex'));
    }

    public function index()
    {
        $pesertas = PesertaModel::all();
        return view('admin.account.index', ['pesertas' => $pesertas]);
    }

    public function delete( $id)
    {
        $this->pesertaRepo->delete($id);
        return redirect(route('pesertaindex'));
    }
}
