<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    public function products()
    {
        return $this->belongsTo(product::class);
    }
}
