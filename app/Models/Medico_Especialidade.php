<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medico_Especialidade extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'medico__especialidades';

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
    protected $fillable = ['id_medico', 'id_especialidade'];

    
}
