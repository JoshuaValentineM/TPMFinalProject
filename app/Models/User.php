<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    public $timestamps = false;

    protected $fillable = [
        'role',
        // 'name',
        'email',
        //username == teamname
        'username',
        'password',
        'binusian',
        'fullName',
        // 'emailLeader',
        'whatsappNumber',
        'lineID',
        'githubGitlabID',
        'birthPlace',
        'dayBirthDate',
        'monthBirthDate',
        'yearBirthDate',
        'CV',
        // // 'flazzCard',
        'IDCard',
        'verification',
        'payment',

    ];

    public function member()
    {
        return $this->hasMany(Member::class);
    }

    public function payment()
    {
        return $this->hasMany(Payment::class);
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
