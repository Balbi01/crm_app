<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\Prospect\ProspectService;

/**
 * Clase controlador para manejar todas las solicitudes relacionadas con Prospectos.
 * Recibe solicitudes HTTP Request y devuelve las respuestas apropiadas formateadas
 * de la mejor manera.
 * @package App\Http\Controllers
 */
class ProspectController extends Controller
{
    /** @var ProspectService */
    protected $prospectService;

    /** Método constructor de la clase */
    public function __construct(
        ProspectService $prospectServiceInstance
    ) {
        // Inyección de dependencias
        $this->prospectService = $prospectServiceInstance;
    }
}
