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
}
