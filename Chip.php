<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chip extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function pet() {
        return $this->hasOne(Pet::class);
    }
}
