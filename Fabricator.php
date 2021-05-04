<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fabricator extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function foods() {
        return $this->belongsToMany(Food::class);
    }
}
