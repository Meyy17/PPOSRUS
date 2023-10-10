<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Osis extends Model
{
    use HasFactory;

    protected $fillable = ['number', 'ketua', 'wakil', 'image'];

    public function votes()
    {
        return $this->hasMany(VoteOsis::class, 'id_osis');
    }
}
