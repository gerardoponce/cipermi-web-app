<?php

namespace App\Http\Controllers\Guest;

use App\Models\Product;
use App\Models\Service;
use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\ProductRepositoryIntf;
use App\Repositories\Interfaces\ServiceRepositoryIntf;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class HomeController extends Controller
{

    private $serviceRepository;
    private $productRepository;
  
    public function __construct(ProductRepositoryIntf $productRepository, ServiceRepositoryIntf $serviceRepository)
    {
        $this->productRepository = $productRepository;
        $this->serviceRepository = $serviceRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getHome()
    {
        $servicios = $this->serviceRepository->getNombreIcono();
        $productos = $this->productRepository->getNombreImagen();

        return view('guest.home', compact('servicios', 'productos'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getServicios()
    {
        $serviciosAux = $this->serviceRepository->getNombreDescripcionVideo();
        $serviciosUno = new Collection;
        $serviciosDos = new Collection;

        for ($i=0; $i < $serviciosAux->count(); $i = $i + 2) { 
            $serviciosUno->push($serviciosAux[$i]);
        };

        for ($i=1; $i <= $serviciosAux->count(); $i = $i + 2) { 
            $serviciosDos->push($serviciosAux[$i]);
        };

        $serviciosUno->map(function ($servicio) {
            return $servicio->estado = 0;
        });
        
        $serviciosDos->map(function ($servicio) {
            return $servicio->estado = 1;
        });

        $servicios = $serviciosAux;
        
        return view('guest.servicios', compact('servicios'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getProductos()
    {
        $productos = $this->productRepository->getNombreDescripcionImagen();

        return view('guest.productos', compact('productos'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getLocales()
    {

        return view('guest.locales');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getNosotros()
    {
        return view('guest.nosotros');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getContactanos()
    {
        return view('guest.contactanos');
    }

}
