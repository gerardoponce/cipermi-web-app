<?php

namespace Tests\Unit;

use App\Models\Service;
use App\Repositories\ServiceRepositoryImpl;

use Tests\TestCase;

class ServiceRepositoryTest extends TestCase
{

    public function testCreateService()
    {
        $datos = [
            'nombre' => "Prueba de servicio",
            'descripcion' => "Prueba de descripción de un servicio",
            'icono_portada' => "asd",
            'alt_icono_portada' => "asd",
            'video_descripcion' => "asd"
        ];

        $serviceRepository = new ServiceRepositoryImpl(new Service);

        $service = $serviceRepository->create($datos);

        $this->assertInstanceOf(Service::class, $service);
        $this->assertEquals($datos['nombre'], $service->nombre);
        $this->assertEquals($datos['descripcion'], $service->descripcion);
        $this->assertEquals($datos['icono_portada'], $service->icono_portada);
        $this->assertEquals($datos['alt_icono_portada'], $service->alt_icono_portada);
        $this->assertEquals($datos['video_descripcion'], $service->video_descripcion);
    }

    
}
