<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mpk extends Model
{
    use HasFactory;

    protected $fillable = ['number', 'ketua', 'wakil', 'image'];

    public function votes()
    {
        return $this->hasMany(VoteMpk::class, 'id_mpk');
    }
}
