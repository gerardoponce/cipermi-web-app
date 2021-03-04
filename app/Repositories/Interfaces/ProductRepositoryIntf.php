<?php
namespace App\Repositories\Interfaces;

use App\Models\Product;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

interface ProductRepositoryIntf
{
    public function getNombreImagen(): Collection;

    public function getNombreDescripcionImagen(): Collection;

    public function getCodigoNombreStockPrecioFechaActualizacionWhere($search, $stock, $perPage): LengthAwarePaginator;

    public function countIfPrecioCero();

    public function findByCodigo($codigo): Product;

    public function findByCodigoAllAddPrecioTotal($codigo): Product;
}