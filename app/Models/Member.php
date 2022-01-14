<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullName',
        'email',
        'whatsappNumber',
        'lineID',
        'githubGitlabID',
        'birthPlace',
        'dayBirthDate',
        'monthBirthDate',
        'yearBirthDate',
        'CV',
        // 'flazzCard',
        'IDCard',
        'teamId',
        'memberNumber',

    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
