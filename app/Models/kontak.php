<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kontak extends Model
{
    use HasFactory;
    protected $table = 'tabel_kontak';

    protected $fillable = ['nama', 'telepon', 'kodeData', 'unitkerja', 'eselon', 'status', 'pangkat',];
}
