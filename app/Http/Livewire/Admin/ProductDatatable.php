<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use App\Repositories\Interfaces\ProductRepositoryIntf;

use Carbon\Carbon;

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
    public Product $productDto;
    public $codigo;
    public $countAux = '>=';

    public $codigoProduct;
    public $nombreProduct;
    public $descripcionProduct;
    public $precioProduct;
    public $stockProduct;
    public $imagenProduct;
    public $actualizacionProduct;

    private $productRepository;

    private function getRepository(): ProductRepositoryIntf
    {
        return $this->productRepository = App::make(ProductRepositoryIntf::class);
    }

    public function show($codigo)
    {
        $this->productDto = $this->getRepository()->findByCodigo($codigo);

        $this->codigoProduct = $this->productDto->codigo;
        $this->nombreProduct = $this->productDto->nombre;
        $this->descripcionProduct = $this->productDto->descripcion;
        $this->precioProduct = $this->productDto->precio;
        $this->stockProduct = $this->productDto->stock;
        $this->imagenProduct = $this->productDto->imagen_portada;
        $this->actualizacionProduct = Carbon::parse($this->productDto->updated_at)->tz('America/Lima')->isoFormat('DD-MM-YYYY, H:mm:ss');
    }

    public function render()
    {
        return view('livewire.admin.product-datatable', [
            'products' => $this->getRepository()->getCodigoNombreStockPrecioFechaActualizacionWhere($this->search, $this->countAux, $this->perPage),
            'count' => $this->getRepository()->countIfPrecioCero(),
        ]);
    }

    public function filterStock()
    {
        if ($this->countAux == '=') {
            $this->countAux = '>=';
        }
        else {
            $this->countAux = '=';
        }
    }

    public function clearSearch()
    {
        $this->search = '';
        $this->page = 1;
        $this->perPage = 5;
    }
}
