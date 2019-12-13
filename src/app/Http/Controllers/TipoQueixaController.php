<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\TipoQueixa;

class TipoQueixaController extends Controller
{
  public function index() {
    $tiposQueixa = TipoQueixa::all();
    return view('tipos-queixa.index', compact('tiposQueixa'));
  }

  public function create() {
    return view('tipos-queixa.create');
  }

  public function store(Request $request) {
    TipoQueixa::create($request->all());
    return redirect()->route('tipos-queixa.index');
  }

  public function edit(TipoQueixa $tipoQueixa) {
    return view('tipos-queixa.edit', compact('tipoQueixa'));
  }

  public function update(Request $request, TipoQueixa $tipoQueixa) {
    $tipoQueixa->update($request->all());
    return redirect()->route('tipos-queixa.index');
  }

  public function destroy(TipoQueixa $tipoQueixa) {
    $tipoQueixa->delete();
    return redirect()->route('tipos-queixa.index');
  }
}
