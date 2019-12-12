<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Queixa;
use App\Models\TipoQueixa;

class QueixaController extends Controller
{
  public function index() {
    $queixas = Queixa::all();
    return view('queixas.index', compact('queixas'));
  }

  public function create() {
    $tiposQueixa = TipoQueixa::all();
    return view('queixas.create', compact('tiposQueixa'));
  }

  public function store(Request $request) {
    Queixa::create($request->all());
    return redirect()->route('queixas.index');
  }
}
