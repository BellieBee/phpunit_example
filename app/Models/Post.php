<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Mutator
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = strtolower($value);
    }

    // Accessor
    public function getSlugAttribute()
    {
        return str_replace(' ', '-', $this->name);
    }

    // Metodo personalizado
    public function href()
    {
        return "blog/{$this->slug}";
    }
}
