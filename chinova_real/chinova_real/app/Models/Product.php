<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'price',
        'weight',
        'quantity',
        'image',
        'is_paid',
        'code',
        'status',
        'link',
        'user_id'

    ];

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
