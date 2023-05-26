<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cost extends Model
{
    protected $table = 'costs';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id_users',
        'cost_name',
        'total_kamar',
        'cost_type',
        'available_room',
        'cost_address',
        'description',
        'contact_person',
        'night_limit',
        'long_add',
        'lat_add',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_users', 'id');
    }
}
