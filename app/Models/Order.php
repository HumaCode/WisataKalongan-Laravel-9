<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'destinasi_id',
        'tlp',
        'email',
        'tgl_order',
        'bank',
        'nominal',
        'ket_lain',
    ];

    public function destinasi()
    {
        return $this->belongsTo(Destinasi::class, 'destinasi_id', 'id');
    }
}
