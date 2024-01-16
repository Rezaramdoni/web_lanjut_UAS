<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = "transaksis";
    protected $fillable = ['nama_customer', 'total_bayar', 'jam_mulai', 'jam_selesai', 'tanggal_boking'];

    public function namecustomer()
    {
        return $this->belongsTo(Customer::class, 'nama_customer', 'id');
    }
}
