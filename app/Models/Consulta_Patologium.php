<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consulta_Patologium extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'consulta__patologias';

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
    protected $fillable = ['id_consulta', 'id_patologia'];

    
}
