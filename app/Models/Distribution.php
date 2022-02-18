<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distribution extends Model
{
    use HasFactory;
    protected $table = "distributions";
    protected $fillable = [
        'acceptor_id','amount','description','bill'
    ];

    public function acceptors()
    {
        return $this->belongsTo("App\Models\Acceptor", "acceptor_id", "id");
    }
}
