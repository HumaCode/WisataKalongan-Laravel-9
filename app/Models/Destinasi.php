<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Destinasi extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = [
        'nama',
        'slug',
        'kategori_id',
        'tiket',
        'harga_tiket',
        'buka',
        'alamat',
        'lokasi',
        'descripsi',
        'gambar',
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id', 'id');
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
