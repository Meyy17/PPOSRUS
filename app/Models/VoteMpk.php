<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VoteMpk extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'id_mpk'
    ];

    public function mpk()
    {
        return $this->belongsTo(Mpk::class, 'id_mpk');
    }
}
