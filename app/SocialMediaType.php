<?php

namespace App;

use App\SocialMedia;
use Illuminate\Database\Eloquent\Model;

class SocialMediaType extends Model
{
    protected $table = 'social_media_types';
    protected $fillable = [
        'name'
    ];

    public function socialMedias()
    {
        return $this->hasMany(SocialMedia::class, 'social_media_type_id');
    }
}