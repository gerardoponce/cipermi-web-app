<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;

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

    public function render()
    {
        return view('livewire.admin.product-datatable', [
            'products' => Product::where('codigo', 'LIKE', "%{$this->search}%")
                            ->orWhere('nombre', 'LIKE', "%{$this->search}%")
                            ->orderBy('codigo', 'asc')
                            ->paginate($this->perPage),
        ]);
    }

    public function clear()
    {
        $this->search = '';
        $this->page = 1;
        $this->perPage = 5;
    }
}
