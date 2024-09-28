<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Clase modelo de la tabla prospectos.
 */
class Prospect extends Model
{
    use HasFactory;

    /**
     * Atributos asignables en masa.
     */
    protected $fillable = [
        'legal_name',
        'business_name',
        'rfc',
        'email',
        'phone',
    ];

    /**
     * Atributos de fechas
     */
    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
