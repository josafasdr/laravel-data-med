<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Paciente;

class Consulta extends Model
{
  protected $table = 'dtm_consultas';

  protected $fillable = [
    'paciente_id',
    'plano_conduta'
  ];

  public function paciente() {
    return $this->belongsTo('App\Models\Paciente', 'paciente_id');
  }

  public function queixas() {
    return $this->belongsToMany('App\Models\Queixa', 'dtm_consultas_queixas');
  }
}
