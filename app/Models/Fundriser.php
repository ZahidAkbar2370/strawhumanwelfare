<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fundriser extends Model
{
    use HasFactory;

    protected $table = "fundrisers";

    protected $fillable = [
        'name','email','mobile_no','whatsapp_no','address','status'
    ];
}
