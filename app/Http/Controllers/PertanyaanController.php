<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pertanyaan;

class PertanyaanController extends Controller
{
    public function index()
    {
        $pertanyaans = Pertanyaan::all();
        return view ('pertanyaan', [
            'pertanyaans' => $pertanyaans
        ]);
    }

    public function create()
    {
        return view('formpertanyaan');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        Pertanyaan::create($request->all());

        return redirect('/pertanyaan');
    }
}
