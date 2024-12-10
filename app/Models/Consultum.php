<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consultum extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'consultas';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_medesp', 'id_paciente', 'data_consulta', 'hora_consulta'];

    
}
