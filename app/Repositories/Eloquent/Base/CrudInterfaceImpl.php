<?php

namespace App\Repositories\Eloquent\Base;

use App\Repositories\Eloquent\Base\CrudInterface; 

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class CrudInterfaceImpl implements CrudInterface
{

    /**      
     * @var Model      
     */     
    protected $model;       

    /**      
     * CrudInterfaceImpl constructor.      
     *      
     * @param Model $model      
     */     
    public function __construct(Model $model)     
    {         
        $this->model = $model;
    }

    public function all(): Collection
    {
        return $this->model->all();    
    }

    public function create(array  $data): Model
    {
        return $this->model->create($data);
    }

    // public function update(array $data, $id)
    // {

    // }

    // public function delete($id)
    // {

    // }

    // public function find($id)
    // {

    // }
}