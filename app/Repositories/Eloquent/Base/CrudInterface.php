<?php

namespace App\Repositories\Eloquent\Base;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface CrudInterface
{
    public function all(): Collection;

    public function find(Model $model): Model;

    public function create(array  $data): Model;

    public function update(array $data, Model $model): bool;

    public function delete(Model $model): bool;

}
