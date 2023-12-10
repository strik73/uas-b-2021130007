<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable =[
        'status'
    ];

    public function order_item()
    {
        return $this->belongsToMany(Item::class);
    }
}
