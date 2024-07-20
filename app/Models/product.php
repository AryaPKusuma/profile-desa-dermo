<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $fillable = [
        'name',
        'photo',
        'price',
        'unit_type',
        'umkm_id'
    ];

    public function umkm()
    {
        return $this->belongsTo(Umkm::class);
    }
}
