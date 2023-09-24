<?php

namespace App;

use App\Paket;
use App\Transaction;
use Illuminate\Database\Eloquent\Model;

class PaketType extends Model
{
    protected $table = 'paket_types';
    protected $fillable = [
        'name'
    ];

    public function pakets()
    {
        return $this->hasMany(Paket::class, 'paket_type_id');
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'paket_type_id');
    }
}