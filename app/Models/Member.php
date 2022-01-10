<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'whatsappNumber',
        'lineID',
        'githubGitlabID',
        'birthPlace',
        'dayBirthDate',
        'monthBirthDate',
        'yearBirthDate',
        // 'CV',
        // 'flazzCard',
        // 'IDCard',
        'teamId',
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
