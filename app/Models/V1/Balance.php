<?php

namespace App\Models\V1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Balance extends Model
{
    use HasFactory;
    protected $table = 'balances';
    protected $fillable = [
        'user_id', 'user_balance'
    ];
}
