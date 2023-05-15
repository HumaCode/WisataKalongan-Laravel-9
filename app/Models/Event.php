<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = [
        'nama',
        'slug',
        'gambar',
        'tgl_mulai',
        'tgl_selesai',
        'waktu',
        'penyelenggara',
        'deskripsi',
        'lokasi',
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nama'
            ]
        ];
    }
}
