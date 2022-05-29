<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BankaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'Naziv ' => $this->resource->naziv,
            'Sedište ' => $this->resource->sediste,
            'Broj zaposlenih ' => $this->resource->broj_zaposlenih,
            'Broj filijala ' => $this->resource->broj_filijala,
        ];
    }
}
