<?php

namespace App;

use App\Owner;
use App\Admin;
use App\Product;
use App\Testimoni;
use App\Marketplace;
use App\SocialMedia;
use App\PromoOrEvent;
use App\BusinessHasPaket;
use Illuminate\Database\Eloquent\Model;

class OwnerBusiness extends Model
{
    protected $table = 'owner_businesses';
    protected $fillable = [
        'owner_id', 'admin_id', 'url', 'photo', 'description', 'address', 'link_location', 'is_show_location', 'whatsapp_number', 'phone_number', 'email'
    ];

    public function owner()
    {
        return $this->belongsTo(Owner::class, 'owner_id');
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'admin_id');
    }

    public function businessHasPakets()
    {
        return $this->hasMany(BusinessHasPaket::class, 'owner_business_id');
    }

    public function marketplaces()
    {
        return $this->hasMany(Marketplace::class, 'owner_business_id');
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'owner_business_id');
    }

    public function promoOrEvents()
    {
        return $this->hasMany(PromoOrEvent::class, 'owner_business_id');
    }

    public function socialMedias()
    {
        return $this->hasMany(SocialMedia::class, 'owner_business_id');
    }

    public function testimoni()
    {
        return $this->hasMany(Testimoni::class, 'owner_business_id');
    }
}