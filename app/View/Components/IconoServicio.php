<?php

namespace App\View\Components;

use Illuminate\View\Component;

class IconoServicio extends Component
{
    /**
     * Nombre del servicio.
     *
     * @var string
     */
    public $nombre;
   
    /**
     * Icono del servicio.
     *
     * @var string
     */
    public $icono;

    /**
     * Texto alternativo del icono del servicio.
     *
     * @var string
     */
    public $textAltIcono;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($nombre, $icono, $textAltIcono)
    {
        $this->nombre = $nombre;
        $this->icono = $icono;
        $this->textAltIcono = $textAltIcono;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.icono-servicio');
    }
}
