<?php

namespace App\Http\Repositories\Prospect;

use App\Models\Prospect;

class ProspectRepository
{
    /** @var Prospect */
    protected $prospectModel;

    /**
     * Método constructor de la clase
     */
    public function __construct(
        Prospect $prospectModelInstance
    ) {
        $this->prospectModel = $prospectModelInstance;
    }
}
