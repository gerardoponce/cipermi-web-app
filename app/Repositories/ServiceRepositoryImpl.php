<?php

namespace App\Repositories;

use App\Models\Service;
use App\Repositories\Eloquent\CrudInterfaceImpl;
use App\Repositories\Interfaces\ServiceRepositoryIntf;

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
}