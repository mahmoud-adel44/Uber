<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $fillable = [
        'name', 'car', 'is_busy', 'number'
    ];
    public function travel()
    {
        return $this->hasOne('App\Models\Travel');
    }
}
