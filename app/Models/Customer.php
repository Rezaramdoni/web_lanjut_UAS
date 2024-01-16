<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = "customers";
    protected $fillable = ['nama_customer', 'nomer_kontak', 'boking_lapangan', 'alamat', 'jenis_kelamin'];

    public function boking()
    {
        return $this->belongsTo(Lapangan::class, 'boking_lapangan', 'id');
    }
}
