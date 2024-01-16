<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lapangan extends Model
{
    use HasFactory;
    protected $table = "lapangans";
    protected $fillable = ['image', 'nama_lapangan', 'nomor_kontak', 'alamat', 'status'];
}
