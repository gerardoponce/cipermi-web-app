<?php

namespace App\Repositories;

use App\Models\Product;
use App\Repositories\Eloquent\CrudInterfaceImpl;
use App\Repositories\Interfaces\ProductRepositoryIntf;

class ProductRepositoryImpl extends CrudInterfaceImpl implements ProductRepositoryIntf
{
    
    /**
     * ProductRepositoryImpl constructor.
     *
     * @param Product $model
     */
    public function __construct(Product $model)
    {
        parent::__construct($model);
    }
}