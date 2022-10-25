<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    use HasFactory;
    protected $table = 'points';

    protected $fillable = [
        'adult_id','game','points'
    ];
    public function adults()
    {
        return $this->belongsTo(Adult::class,'adult_id');

    }
}
