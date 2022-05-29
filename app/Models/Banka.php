<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Klijent;

class Banka extends Model
{
    use HasFactory;

    public function klijenti()
    {
        return $this->hasMany(Klijent::class);
    }
}
