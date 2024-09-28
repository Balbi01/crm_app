<?php

namespace App\Http\Controllers\Prospect;

use App\Http\Controllers\Controller;
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

    /** @var Request */
    protected $request;

    /** Método constructor de la clase */
    public function __construct(
        ProspectService $prospectServiceInstance,
        Request $requestInstance
    ) {
        // Inyección de dependencias
        $this->prospectService = $prospectServiceInstance;
        $this->request = $requestInstance;
    }

    /**
     * Método encargado de regresar el índice de prospectos.
     */
    public function index(Request $request)
    {
        // Llamada al método index del servicio de prospectos
        return $this->prospectService->index();
    }
}
