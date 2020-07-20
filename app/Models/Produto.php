<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Tag;

class Produto extends Model
{
    protected $fillable = [
        'user_id', 'name', 'image', 'descricao'
    ];
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }
}
