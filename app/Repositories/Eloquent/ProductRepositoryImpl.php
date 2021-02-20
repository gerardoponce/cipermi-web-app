<?php

namespace App\Repositories\Eloquent;

use App\Models\Product;
use App\Repositories\Eloquent\Base\CrudInterfaceImpl;
use App\Repositories\Interfaces\ProductRepositoryIntf;

use Illuminate\Support\Collection;

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

    /**
     * Show a list of products.
     *
     * @return \Illuminate\Http\Response
     */
    public function getNombreImagen(): Collection
    {
        $products = $this->model
                        ->select('nombre', 'imagen_portada', 'alt_imagen_portada')
                        ->get();

        return $products;
    }

        /**
     * Show a list of products.
     *
     * @return \Illuminate\Http\Response
     */
    public function getNombreDescripcionImagen(): Collection
    {
        $products = $this->model
                        ->select('nombre','descripcion', 'imagen_portada', 'alt_imagen_portada')
                        ->get();

        return $products;
    }
}