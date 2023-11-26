<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'description',
        'title',
        'price',
        'wieght',
        'link',
        'is_paid',
        'code',
        'quntity',
        'status',
        'user_id',
        'image',
        'discription'

    ];

public function user(){
    return $this->belongsTo(User::class);
}

}
