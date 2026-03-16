<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Media extends Model
{
    protected $fillable = [
        'title',
        'author',
        'category',
        'year',
        'pages',
        'prix',
        'description',
        'cover_image',
        'file_url',
        'status',
    ];

    public function wishlistedBy(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'wishlist');
    }
}
