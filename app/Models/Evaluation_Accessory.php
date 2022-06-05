<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluation_Accessory extends Model
{
    use HasFactory;
    protected $table = 'evaluation_accessory';

    protected $fillable = [
        'name', 'user_id', "comment", "stars", "accessory_id"
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}