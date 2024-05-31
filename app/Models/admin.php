<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory;

    protected $table = 'admin_tabel_admin'; // Nama tabel

    // Kolom yang dapat diisi
    protected $fillable = [
        'username','telp','email','password', // dan kolom lainnya jika ada
    ];

    // Menyembunyikan kolom password saat serialisasi model
    protected $hidden = [
        'password',
    ];
}