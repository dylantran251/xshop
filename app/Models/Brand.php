<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $table = 'brands';

    protected $fillable = [
        'image',
        'name',
        'status',
        'address',
        'hotline',
        'description'
    ];

    protected $primaryKey = 'id';

    public function product(){
        return $this->belongsTo(Product::class);
    }
}
