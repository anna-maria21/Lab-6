<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function chip() {
        return $this->belongsTo(Chip::class);
    }

    public function owner() {
        return $this->belongsTo(Owner::class);
    }
}