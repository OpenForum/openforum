<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Profile extends Model
{
    use HasFactory;

    protected $table = 'profiles';

    protected $fillable = [
        'display_name',
        'biography',
        'profile_image',
        'gender',
        'user_id'
    ];

    /**
     * Returns the user associated with this profile.
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
