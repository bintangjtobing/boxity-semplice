<?php

namespace App;

use App\PaketType;
use App\BusinessHasPaket;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transactions';
    protected $fillable = [
        'paket_type_id', 'price', 'value', 'duration_type', 'transaction_date', 'status'
    ];

    public function paketType()
    {
        return $this->belongsTo(PaketType::class, 'paket_type_id');
    }

    public function businessHasPakets()
    {
        return $this->hasMany(BusinessHasPaket::class, 'transaction_id');
    }
}