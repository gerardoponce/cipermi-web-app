<?php
namespace App\Repositories\Interfaces;

use App\Model\Service;

use Illuminate\Support\Collection;

interface ServiceRepositoryIntf
{
    public function getNombreIcono(): Collection;

    public function getNombreDescripcionVideo(): Collection;
}