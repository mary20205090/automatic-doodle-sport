<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adult extends Model
{
    use HasFactory;
    protected $table = 'adults';

    protected $fillable = [
        'fname','mname','lname'
    ];

    public function points()
    {
        return $this->hasMany(Point::class, 'adult_id');
    }
   

}
