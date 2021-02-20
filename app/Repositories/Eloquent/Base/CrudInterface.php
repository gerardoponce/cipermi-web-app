<?php

namespace App\Repositories\Eloquent\Base;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface CrudInterface
{
    public function all(): Collection;

    public function create(array  $data): Model;

    // public function update(array $data, $id);

    // public function delete($id);

    // public function find($id);

}
