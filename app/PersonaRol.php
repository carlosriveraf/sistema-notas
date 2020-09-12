<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonaRol extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */

    protected $table = 'persona-rol';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'ID_DNI';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'string';

}
