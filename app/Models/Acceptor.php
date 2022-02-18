<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acceptor extends Model
{
    use HasFactory;

    protected $table = "acceptors";

    protected $fillable = [
        'name','mobile_no','address','status'
    ];
}
