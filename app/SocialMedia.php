<?php

namespace App;

use App\OwnerBusiness;
use App\SocialMediaType;
use Illuminate\Database\Eloquent\Model;

class SocialMedia extends Model
{
    protected $table = 'social_medias';
    protected $fillable = [
        'owner_business_id', 'social_media_type_id', 'link'
    ];

    public function ownerBusiness()
    {
        return $this->belongsTo(OwnerBusiness::class, 'owner_business_id');
    }

    public function socialMediaType()
    {
        return $this->belongsTo(SocialMediaType::class, 'social_media_type_id');
    }
}