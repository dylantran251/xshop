<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
<<<<<<< HEAD

    protected $table = 'orders';

    protected $fillable = [
        'user_id',
        'status',
        'total_amount',
        'confirm_time',
        'payment_method'
    ];

    protected $primaryKey = 'id';
=======
>>>>>>> 6f1ec54b8fd2a6df075ee9a09611f21dd70ce090
}
