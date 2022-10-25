<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kid extends Model
{
    use HasFactory;
    protected $fillable = [
        'fname','mname','lname'
    ];

    public function kidpoints()
    {
        return $this->hasMany(kidpoint::class, 'kid_id');
    }

}
