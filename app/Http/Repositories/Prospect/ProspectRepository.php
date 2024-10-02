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

    /**
     * Método encargado de regresar el índice de prospectos.
     * TODO: Implementar paginación y filtrado.
     */
    public function index()
    {
        return $this->prospectModel->all()->toArray();
    }

    /**
     * Método encargado de crear un nuevo prospecto.
     * @param array $prospectData
     * @return array
     */
    public function createProspect($prospectData)
    {
        try {
            $prospect = new $this->prospectModel;
            $prospect->code = $prospectData['code'] ?? null;
            $prospect->legal_name = $prospectData['legalName'] ?? null;
            $prospect->business_name = $prospectData['businessName'] ?? null;
            $prospect->rfc = $prospectData['rfc'] ?? null;
            $prospect->email = $prospectData['email'] ?? null;
            $prospect->phone = $prospectData['phone'] ?? null;

            $prospect->save();

            return [
                'status' => 'success',
                'message' => 'Prospecto creado satisfactoriamente.'
            ];
        } catch (\Exception $e) {
            return [
                'status' => 'error',
                'message' => 'Error al crear el prospecto.' . $e->getMessage()
            ];
        }
    }
}
