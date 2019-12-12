<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Queixa;

class TipoQueixa extends Model
{
    protected $table = 'dtm_tipos_queixa';

    protected $fillable = [
      'nome'
    ];

    public function queixas() {
      return $this->hasMany('App\Models\Queixa');
    }
}
