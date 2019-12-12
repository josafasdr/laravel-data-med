<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Consulta;
use App\Models\Paciente;
use App\Models\Queixa;

class ConsultaController extends Controller
{
  
  public function index() {
    $consultas = Consulta::all();
    return view('consultas.index', compact('consultas'));
  }

  public function create() {
    $pacientes = Paciente::all();
    $queixas = Queixa::all();
    return view('consultas.create', compact('pacientes', 'queixas'));
  }

  public function store(Request $request) {
    $fields = ['paciente_id'=>$request['paciente_id'], 'plano_conduta'=>$request['plano_conduta']];
    $consulta = Consulta::create($fields);

    $queixas = explode(',', $request['queixas']);
    $consulta->queixas()->attach($queixas);
    return redirect()->route('consultas.index');
    
    //echo $request['data'];
  }

  public function show(Consulta $consulta) {
    return view('consultas.show', compact('consulta'));
  }

  public function edit(Consulta $consulta) {
    $queixas = Queixa::all();
    return view('consultas.edit', compact('consulta', 'queixas'));
  }

  public function update(Request $request, Consulta $consulta) {
    $fields = ['paciente_id'=>$request['paciente_id'], 'plano_conduta'=>$request['plano_conduta']];
    $consulta->update($fields);

    $queixas = explode(',', $request['queixas']);
    $consulta->queixas()->sync($queixas);
    return redirect()->route('consultas.index');
  }
}
