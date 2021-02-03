<?php

namespace Tests\Unit;

use App\Models\Product;
use App\Repositories\ProductRepositoryImpl;

use Tests\TestCase;

class ProductRepositoryTest extends TestCase
{
    public function testCreateProduct()
    {
        $datos = [
            'nombre' => "Prueba de servicio",
            'descripcion' => "Prueba de descripción de un servicio"
        ];

        $productRepository = new ProductRepositoryImpl(new Product);

        $product = $productRepository->create($datos);

        $this->assertInstanceOf(Product::class, $product);
        $this->assertEquals($datos['nombre'], $product->nombre);
        $this->assertEquals($datos['descripcion'], $product->descripcion);
    }
}
