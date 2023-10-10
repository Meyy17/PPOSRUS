<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VoteOsis extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'id_osis'
    ];

    public function osis()
    {
        return $this->belongsTo(Osis::class, 'id_osis');
    }
}
