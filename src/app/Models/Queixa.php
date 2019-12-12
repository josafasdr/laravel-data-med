<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\TipoQueixa;

class Queixa extends Model
{

  protected $table = 'dtm_queixas';

  protected $fillable = [
    'nome', 'tipo_queixa_id'
  ];

  public function tipoQueixa() {
    return $this->belongsTo('App\Models\TipoQueixa', 'tipo_queixa_id');
  }

  //public function consultas() {
  //  return $this->belongsToMany('App\Consulta', 'dtm_consultas_queixas');
  //}
}
