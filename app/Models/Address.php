<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $table = 'addresses';
    protected $fillable = [
        'city',
        'state',
        'country',
    ];

    public function user() {
        return $this->hasOne(User::class, 'address_id');
    }
}
