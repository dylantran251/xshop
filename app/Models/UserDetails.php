<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    use HasFactory;

    protected $table = 'user_details';

    protected $fillable = [
        'user_id',
        'first_name',	
        'last_name',
        'phone',	
        'address1',	
        'address2'	
    ];

    protected $primarykey = 'id';
    
    public function user() {
        return $this->belongsTo(User::class);
    }
    

}
