<?php

namespace App\Repositories\Eloquent;

use App\Models\Product;
use App\Repositories\Eloquent\Base\CrudInterfaceImpl;
use App\Repositories\Interfaces\ProductRepositoryIntf;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

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
    public function getNombreImagenConfirmedImagenPortada(): Collection
    {
        $products = $this->model
                        ->select('nombre', 'imagen_portada', 'alt_imagen_portada')
                        ->where('producto_portada', '=', TRUE)
                        ->get();

        return $products;
    }

    /**
     * Show a list of products.
     *
     * @return \Illuminate\Http\Response
     */
    public function getNombreDescripcionImagenConfirmedImagenPortada(): Collection
    {
        $products = $this->model
                        ->select('nombre', 'descripcion', 'imagen_portada', 'alt_imagen_portada')
                        ->where('producto_portada', '=', TRUE)
                        ->get();

        return $products;
    }

    /**
     * Show a list of products.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCodigoNombreStockPrecioFechaActualizacionWhere($search, $value, $portada, $perPage): LengthAwarePaginator
    {
        $products = $this->model
                        ->select('codigo', 'nombre', 'stock', 'precio', 'updated_at')
                        ->addSelect(DB::raw('(stock * precio) AS precio_total'))
                        ->where([
                            ['stock', "$value", '0'],
                            ['codigo', 'LIKE', "%{$search}%"],
                            ['producto_portada', 'LIKE', "%{$portada}%"],
                        ])
                        ->orWhere([
                            ['stock', "$value", '0'],
                            ['nombre', 'LIKE', "%{$search}%"],
                            ['producto_portada', 'LIKE', "%{$portada}%"],
                        ])
                        ->orderBy('codigo', 'asc')
                        ->paginate($perPage);

        return $products;
    }

    /**
     * Count products.
     *
     * @return \Illuminate\Http\Response
     */
    public function countIfPrecioCero()
    {
        $count = $this->model
                        ->where('stock', '=', '0')
                        ->count();

        return $count;
    }

    /**
     * Show a product.
     *
     * @return \Illuminate\Http\Response
     */
    public function findByCodigo($codigo): Product
    {
        $product = $this->model
                        ->where('codigo', '=', $codigo)
                        ->first();

        return $product;
    }

    /**
     * Show a product.
     *
     * @return \Illuminate\Http\Response
     */
    public function findByCodigoAllAddPrecioTotal($codigo): Product
    {
        $product = $this->model
                        ->select('*')
                        ->addSelect(DB::raw('(stock * precio) AS precio_total'))
                        ->where('codigo', '=', $codigo)
                        ->first();

        return $product;
    }
}