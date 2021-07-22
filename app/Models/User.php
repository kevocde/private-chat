<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Concerns\HasTimestamps;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

/**
 * Class User
 * @package App\Models
 *
 * @property String $username
 * @property String $death_time
 * @property String $token
 * @property String $qr_image
 * @property String $created_at
 * @property String $updated_at
 * @property String $deleted_at
 * @property Participant[] $participants
 */
class User extends Authenticatable
{
    use HasFactory, Notifiable, HasTimestamps, SoftDeletes;

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    protected $table = 'guests';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'death_date',
        'token',
        'qr_image',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'death_time' => 'datetime',
    ];

    /**
     * @return HasMany
     */
    public function participants(): HasMany
    {
        return $this->hasMany('App\Models\Participant');
    }

    /**
     * Crear un nuevo invitado basado en el nombre de usuario pasado
     * @param string $username
     * @return User
     * @throws Exception
     */
    public static function createNewGuest(string $username): User
    {
        if (empty($username)) throw new Exception("The username can't be empty");
        if (User::where('username', $username)->count() > 0) throw new Exception('The username has been taken');

        return User::create([
            'username' => $username,
            'death_date' => date('Y-m-d H:i:s', strtotime(date('now') . ' +7 days')),
            'token' => Str::uuid()
        ]);
    }
}
