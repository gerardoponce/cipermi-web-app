<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use App\Repositories\Interfaces\ProductRepositoryIntf;

use Illuminate\Support\Facades\App;

use Livewire\Component;
use Livewire\WithPagination;

class ProductDatatable extends Component
{
    use WithPagination;

    protected $queryString = [
        'search' => ['except' => ''],
        'perPage' => ['except' => 10],
    ];

    public $search = '';
    public $perPage = 10;

    private $productRepository;

    private function getRepository(): ProductRepositoryIntf
    {
        return $this->productRepository = App::make(ProductRepositoryIntf::class);
    }

    public function render()
    {
        return view('livewire.admin.product-datatable', [
            'products' => $this->getRepository()->getCodigoNombreStockPrecioFechaActualizacionWhere($this->search, $this->perPage),
        ]);
    }

    public function clearSearch()
    {
        $this->search = '';
        $this->page = 1;
        $this->perPage = 5;
    }
}
