<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qosidah extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'title', 'title_latin', 'title_translate',
    ];

    protected $hidden = [
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
