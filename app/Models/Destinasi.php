<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

use Nicolaslopezj\Searchable\SearchableTrait;

class Destinasi extends Model
{
    use HasFactory, Sluggable, SearchableTrait;

    protected $fillable = [
        'nama',
        'slug',
        'kategori_id',
        'tiket',
        'harga_tiket',
        'buka',
        'alamat',
        'lokasi',
        'deskripsi',
        'gambar',
        'gambar2',
        'gambar3',
    ];

    protected $searchable = [
        /**
         * Columns and their priority in search results.
         * Columns with higher values are more important.
         * Columns with equal values have equal importance.
         *
         * @var array
         */
        'columns' => [
            'nama'      => 10,
        ],


    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id', 'id');
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nama'
            ]
        ];
    }
}
