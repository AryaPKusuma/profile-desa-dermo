<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Article extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $dates = ['published_at'];
    protected $fillable = [
        'name',
        'image',
        'content',
        'slug',
        'published_at',
    ];

    protected $casts = [
        'published_at' => 'date',
    ];
    public function getPublishedAtAttribute($value)
    {
        return Carbon::parse($value)->format('d-m-Y'); // Format tanggal saja
    }

}
