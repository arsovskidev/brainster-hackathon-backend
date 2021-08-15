<?php

namespace App\Traits;

trait ImageUpload
{
    public function ImageUpload($query)
    {
        $ext = strtolower($query->getClientOriginalExtension());
        $image = '/images/' . time() . '.' . $ext;
        $query->move(public_path('images'), $image);

        return $image;
    }
}
