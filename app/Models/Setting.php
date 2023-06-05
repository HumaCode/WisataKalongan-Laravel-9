<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    // protected $guarded = [];

    protected $fillable = [
        'title',
        'tentang',
        'meta_keyword',
        'meta_description',
        'meta_author',
        'alamat',
        'tlp',
        'email',
        'facebook',
        'youtube',
        'twitter',
        'ig',
        'logo',
        'hint_website',
    ];
}
