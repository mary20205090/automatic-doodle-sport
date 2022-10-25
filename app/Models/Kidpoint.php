<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kidpoint extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'kid_id','game','points'
    ];
    public function kids()
    {
        return $this->belongsTo(Kid::class,'kid_id');

    }
}
