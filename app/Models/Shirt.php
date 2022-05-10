<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shirt extends Model
{
    use HasFactory;

    public function scopeHasUrl($query) {
        return $query->where('name', 'bageeena');
    }

    public function scopeHasNoUrl($query) {
        return $query->whereNull('name');
    }

}
