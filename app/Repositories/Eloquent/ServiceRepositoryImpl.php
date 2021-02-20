<?php

namespace App\Repositories\Eloquent;

use App\Models\Service;
use App\Repositories\Eloquent\Base\CrudInterfaceImpl;
use App\Repositories\Interfaces\ServiceRepositoryIntf;

use Illuminate\Support\Collection;

class ServiceRepositoryImpl extends CrudInterfaceImpl implements ServiceRepositoryIntf
{
    
    /**
     * ServiceRepositoryImpl constructor.
     *
     * @param Service $model
     */
    public function __construct(Service $model)
    {
        parent::__construct($model);
    }

    /**
     * Show a list of services.
     *
     * @return \Illuminate\Http\Response
     */
    public function getNombreIcono(): Collection
    {
        $services = $this->model
                        ->select('nombre', 'icono_portada', 'alt_icono_portada')
                        ->get();

        return $services;
    }

    /**
     * Show a list of services.
     *
     * @return \Illuminate\Http\Response
     */
    public function getNombreDescripcionVideo(): Collection
    {
        $services = $this->model
                        ->select('nombre', 'descripcion', 'alt_icono_portada', 'video_demostracion', 'video_descripcion')
                        ->get();

        return $services;
    }
}