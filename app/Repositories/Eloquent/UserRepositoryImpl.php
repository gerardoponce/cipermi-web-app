<?php

namespace App\Repositories\Eloquent;

use App\Models\User;
use App\Repositories\Eloquent\Base\CrudInterfaceImpl;
use App\Repositories\Interfaces\UserRepositoryIntf;

use Illuminate\Support\Collection;

class UserRepositoryImpl extends CrudInterfaceImpl implements UserRepositoryIntf
{
    
    /**
     * ServiceRepositoryImpl constructor.
     *
     * @param User $model
     */
    public function __construct(User $model)
    {
        parent::__construct($model);
    }

}