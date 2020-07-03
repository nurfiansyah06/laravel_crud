<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jawaban;
use App\Pertanyaan;

class JawabanController extends Controller
{
    public function index($id)
    {
        $pertanyaan = Pertanyaan::find($id);
        return view('jawaban',[
            'pertanyaan' => $pertanyaan,
        ]);
    }

    public function store(Request $request, $id)
    {
    
        $pertanyaan = Pertanyaan::find($id);
        $jawaban = Jawaban::create([
            'pertanyaan_id' => $pertanyaan, // or whatever it is
            'isi' => $request->isi,
        ]);


        return redirect()->back();
    }

}
