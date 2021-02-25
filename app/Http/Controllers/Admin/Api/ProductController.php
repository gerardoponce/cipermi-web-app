<?php

namespace App\Http\Controllers\Admin\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreProductRequest;
use App\Http\Requests\Admin\UpdateProductRequest;
use App\Http\Resources\ProductCollection;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use App\Repositories\Interfaces\ProductRepositoryIntf;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    private $productRepository;

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
        $productsJson = $this->productRepository->all();

        return (new ProductCollection($productsJson))->response()->setStatusCode(200);
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

        $productJson = $this->productRepository->create($customRequest);
        
        return response()->json(['mensaje' => $productJson])->setStatusCode(200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $productJson =  $this->productRepository->find($product);

        return (new ProductResource($productJson))->response()->setStatusCode(200);
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

        if ($request->filled('imagen_portada') && $request->hasFile('imagen_portada')) {

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

        $productJson = $this->productRepository->update($customRequest, $product);

        return response()->json(['mensaje' => $productJson])->setStatusCode(200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $productJson = $this->productRepository->delete($product);

        return response()->json(['mensaje' => $productJson])->setStatusCode(200);
    }
}
