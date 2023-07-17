<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $table = 'tb_produk';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);    
    }
}
