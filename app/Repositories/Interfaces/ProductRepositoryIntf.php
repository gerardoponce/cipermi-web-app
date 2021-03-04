<?php
namespace App\Repositories\Interfaces;

use App\Models\Product;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

interface ProductRepositoryIntf
{
    public function getNombreImagenConfirmedImagenPortada(): Collection;

    public function getNombreDescripcionImagenConfirmedImagenPortada(): Collection;

    public function getCodigoNombreStockPrecioFechaActualizacionWhere($search, $value, $portada, $perPage): LengthAwarePaginator;

    public function countIfPrecioCero();

    public function findByCodigo($codigo): Product;

    public function findByCodigoAllAddPrecioTotal($codigo): Product;
}