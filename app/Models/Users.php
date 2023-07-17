<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    protected $table = 'tb_users';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    public function pelanggan()
    {
        return $this->hasMany(Pelanggan::class);    
    }
}
