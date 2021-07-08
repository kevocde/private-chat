<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property integer $id
 * @property integer $guest_id
 * @property integer $room_id
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Room $room
 * @property Guest $guest
 * @property Message[] $messages
 */
class Participant extends Model
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
    protected $fillable = ['guest_id', 'room_id'];

    /**
     * @return BelongsTo
     */
    public function room(): BelongsTo
    {
        return $this->belongsTo('App\Models\Room');
    }

    /**
     * @return BelongsTo
     */
    public function guest(): BelongsTo
    {
        return $this->belongsTo('App\Models\Guest');
    }

    /**
     * @return HasMany
     */
    public function messages(): HasMany
    {
        return $this->hasMany('App\Models\Message');
    }
}
