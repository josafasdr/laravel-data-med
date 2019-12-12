<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Paciente;

class PacienteController extends Controller
{

  public function index() {
    $pacientes = Paciente::all();
    return view('pacientes.index', compact('pacientes'));
  }

  public function create() {
    return view('pacientes.create');
  }

  public function store(Request $request) {
    Paciente::create($request->all());
    return redirect()->route('pacientes.index');
  }

  public function show(Paciente $paciente) {
    return view('pacientes.show', compact('paciente'));
  }

  public function edit(Paciente $paciente) {
    return view('pacientes.edit', compact('paciente'));
  }

  public function update(Request $request, Paciente $paciente) {
    $paciente->update($request->all());
    return redirect()->route('pacientes.index');
  }

  public function destroy(Paciente $paciente) {
    $paciente->delete();
    return redirect()->route('pacientes.index');
  }
}
