<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salon extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'salon';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'grado';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'grado', 'nivel', 'DNI_ADMIN', 'seccion',
    ];
}
