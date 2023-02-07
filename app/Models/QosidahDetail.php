<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QosidahDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'qosidah_id', 'line', 'lyric', 'lyric_latin', 'lyric_translate',
    ];

    protected $hidden = ['qosidah_id'];

    public function qosidah()
    {
        return $this->belongsTo(Qosidah::class);
    }
}
