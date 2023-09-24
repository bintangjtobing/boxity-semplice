<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\PaketType;

class Paket extends Model
{
    protected $table = 'pakets';
    protected $fillable = [
        'name', 'price', 'duration', 'paket_type_id', 'max_upload_product', 'max_upload_testimonial'
    ];

    public function paketType()
    {
        return $this->belongsTo(PaketType::class, 'paket_type_id');
    }
}