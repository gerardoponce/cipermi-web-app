<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CardProducto extends Component
{
    /**
     * Nombre del producto.
     *
     * @var string
     */
    public $nombre;
   
    /**
     * Imagen del producto.
     *
     * @var string
     */
    public $imagen;

    /**
     * Texto alternativo de la imagen del servicio.
     *
     * @var string
     */
    public $textAltImagen;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($nombre, $imagen, $textAltImagen)
    {
        $this->nombre = $nombre;
        $this->imagen = $imagen;
        $this->textAltImagen = $textAltImagen;
    }
    
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.card-producto');
    }
}
