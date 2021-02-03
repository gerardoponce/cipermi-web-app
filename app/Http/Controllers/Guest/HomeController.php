<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Service;
use App\Repositories\Interfaces\ProductRepositoryIntf;
use App\Repositories\Interfaces\ServiceRepositoryIntf;

use Illuminate\Http\Request;

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
        //$servicios = Service::all();
        $servicios = $this->serviceRepository->all();
        $productos = $this->productRepository->all();
        //$productos = Product::all();

        return view('guest.home', compact('servicios', 'productos'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getServicios()
    {
        $servicios = Service::all();
        $productos = Product::all();

        return view('guest.servicios', compact('servicios', 'productos'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getProductos()
    {
        $servicios = Service::all();
        $productos = Product::all();

        return view('guest.productos', compact('servicios', 'productos'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getLocales()
    {
        $servicios = Service::all();
        $productos = Product::all();

        return view('guest.locales', compact('servicios', 'productos'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getNosotros()
    {
        $servicios = Service::all();
        $productos = Product::all();

        return view('guest.nosotros', compact('servicios', 'productos'));
    }
}
