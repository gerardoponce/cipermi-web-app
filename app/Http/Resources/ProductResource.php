<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        
        $fechaCreacion = Carbon::parse($this->created_at)->tz('America/Lima')->isoFormat('DD-MM-YYYY');
        $fechaActualizacion = Carbon::parse($this->updated_at)->tz('America/Lima')->isoFormat('DD-MM-YYYY, H:mm:ss');

        return [
            'id' => $this->id,
            'codigo' => $this->codigo,
            'nombre' => $this->nombre,
            'descripcion' => $this->descripcion,
            'stock' => $this->stock,
            'imagen_portada' => $this->imagen_portada,
            'alt_imagen_portada' => $this->alt_imagen_portada,
            'fecha_creacion' =>  $fechaCreacion,
            'fecha_actualizacion' => $fechaActualizacion
        ];
    }
}
