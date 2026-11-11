<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    // Tambahkan baris ini agar kolom tabel bisa diisi via API
    protected $fillable = [
        'name',
        'description',
        'price',
        'duration',
        'capacity',
        'backgrounds',
        'features'
    ];
}