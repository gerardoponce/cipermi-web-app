<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreProductRequest;
use App\Http\Requests\Admin\UpdateProductRequest;
use App\Models\Product;
use App\Repositories\Interfaces\ProductRepositoryIntf;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    private ProductRepositoryIntf $productRepository;

    public function __construct(ProductRepositoryIntf $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.product.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {

        $folder = 'img/products';
        $url = '';

        if($request->hasFile('imagen_portada')) {

            // Upload image
            $image = $request->file('imagen_portada');

            $image_path = $image->store($folder, 'public');

            $url = Storage::disk('public')->url($image_path);
            
        }
        else {
            // Upload default image if it's null
            $image = 'img/app/image-640x480.png';
            
            $url = Storage::disk('public')->url($image);
        }

        $customRequest = $request->all();

        $customRequest['imagen_portada'] = $url;

        $this->productRepository->create($customRequest);
        
        return redirect()->route('admin.product.index')->with('status', 'Producto agregado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $product = $this->productRepository->findByCodigoAllAddPrecioTotal($product->codigo);

        return view('admin.product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('admin.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $folder = 'img/products';
        $url = '';
        $customRequest = $request->all();

        if ($request->hasFile('imagen_portada')) {

            // Upload image
            $image = $request->file('imagen_portada');

            $image_path = $image->store($folder, 'public');

            $url = Storage::disk('public')->url($image_path);

            Storage::disk('public')->delete($product->imagen_portada);

            $customRequest['imagen_portada'] = $url;
        }
        else {

            $url = $product->imagen_portada;
            $customRequest['imagen_portada'] = $url;
        }

        $this->productRepository->update($customRequest, $product);
        
        return redirect()->route('admin.product.index')->with('status', "Producto actualizado, código: {$customRequest['codigo']}");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function deactivate(Product $product)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $this->productRepository->delete($product);

        return redirect()->route('admin.product.index')->with('status', 'Producto eliminado');
    }
}
