<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fund extends Model
{
    use HasFactory;
    protected $table = "funds";
    protected $fillable = [
        'fundriser_id','amount','pay_through'
    ];

    public function fundrisers()
    {
        return $this->belongsTo("App\Models\Fundriser", "fundriser_id", "id");
    }
}
