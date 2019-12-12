<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Consulta;

class Paciente extends Model
{
  protected $table = 'dtm_pacientes';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
    protected $fillable = [
      'nome', 'sexo', 'nascimento', 'prontuario'
  ];

  public function consultas() {
    return $this->hasMany('App\Models\Consulta');
  }
}
