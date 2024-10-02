<?php

namespace App\Http\Services\Prospect;

use App\Http\Repositories\Prospect\ProspectRepository;

class ProspectService
{
    /** @var ProspectRepository */
    protected $prospectRepository;

    /**
     * Método constructor de la clase
     */
    public function __construct(
        ProspectRepository $prospectRepositoryInstance
    ) {
        // Inyección de dependencias
        $this->prospectRepository = $prospectRepositoryInstance;
    }

    /**
     * Método encargado de regresar el índice de prospectos.
     * TODO: Implementar paginación y filtrado.
     */
    public function index()
    {
        return $this->prospectRepository->index();
    }

    /**
     * Método encargado de la lógica de creación de un nuevo prospecto.
     */
    public function createProspect(array $prospectData)
    {
        return $this->prospectRepository->createProspect($prospectData);
    }
}
