<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    protected $fillable = [
        'title',
        'weight',
        'price',
        'link',
        'image',
        'user_id',
        'is_paid',
        'description',
        'code',
        'quantity',
        'status'
    ];

    public function user(){
        return $this->belongsTo(User::class,'user_id');

            }
}
