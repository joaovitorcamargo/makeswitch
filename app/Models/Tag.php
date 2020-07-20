<?php

namespace App\Models;

use App\Models\Produto;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function produtos()
    {
        return $this->belongsToMany(Produto::class);
    }
}
