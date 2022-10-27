<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nice extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id',
        'name',
        'engineer_name',
        'type',
    ];

    public function User(){
        return $this->belongsTo(User::class);
    }
}
