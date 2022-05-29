<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\models\Klijent;

class Kredit extends Model
{
    use HasFactory;

    public function klijent()
    {
        return $this->belongsTo(Klijent::class);
    }
}
