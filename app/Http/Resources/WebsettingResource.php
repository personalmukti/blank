<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class WebsettingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'website_name' => $this->website_name,
            'website_logo' => $this->website_logo,
            'website_version' => $this->website_version,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
