<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property integer $id
 * @property string $username
 * @property string $death_date
 * @property string $token
 * @property string $qr_image
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Participant[] $participants
 */
class Guest extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['username', 'death_date', 'token', 'qr_image'];

    /**
     * @return HasMany
     */
    public function participants(): HasMany
    {
        return $this->hasMany('App\Models\Participant');
    }
}
