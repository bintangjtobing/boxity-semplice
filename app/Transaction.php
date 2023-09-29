<?php

namespace App;

use App\PaketType;
use App\BusinessHasPaket;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transactions';
    protected $guarded = [];

    public function paketType()
    {
        return $this->belongsTo(PaketType::class, 'paket_type_id');
    }

    public function businessHasPakets()
    {
        return $this->hasMany(BusinessHasPaket::class, 'transaction_id');
    }
}
