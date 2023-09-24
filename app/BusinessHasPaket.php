<?php

namespace App;

use App\Transaction;
use App\OwnerBusiness;
use Illuminate\Database\Eloquent\Model;

class BusinessHasPaket extends Model
{
    protected $table = 'business_has_pakets';
    protected $fillable = [
        'owner_business_id', 'transaction_id', 'expired_date'
    ];

    public function ownerBusiness()
    {
        return $this->belongsTo(OwnerBusiness::class, 'owner_business_id');
    }

    public function transaction()
    {
        return $this->belongsTo(Transaction::class, 'transaction_id');
    }
}