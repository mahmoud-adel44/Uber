<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    protected $fillable = [
        'driver_id', 'from', 'to', 'cost', 'passenger', 'status'
    ];
    public function driver()
    {
        return $this->belongsTo('App\Models\Driver');
    }
}
