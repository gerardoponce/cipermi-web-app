<?php
namespace App\Repositories\Interfaces;

use App\Model\Product;

use Illuminate\Support\Collection;

interface ProductRepositoryIntf
{
    public function getNombreImagen(): Collection;

    public function getNombreDescripcionImagen(): Collection;
}