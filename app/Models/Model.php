<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Concerns\HasTimestamps;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Modelo base para los todos los modelos de la APP
 * @package App\Models
 */
abstract class Model extends \Illuminate\Database\Eloquent\Model
{
    use HasTimestamps, SoftDeletes;

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    const DELETED_AT = 'deleted_at';
}
