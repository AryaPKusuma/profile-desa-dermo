<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class umkm extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $fillable = [
        'slug',
        'name',
        'logo',
        'image',
        'description',
        'category',
        'address',
        'phone',
        'googlemap'
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
