<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property integer $id
 * @property integer $participant_id
 * @property string $type
 * @property string $content
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Participant $participant
 */
class Message extends Model
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
    protected $fillable = ['participant_id', 'type', 'content'];

    /**
     * @return BelongsTo
     */
    public function participant(): BelongsTo
    {
        return $this->belongsTo('App\Models\Participant');
    }
}
