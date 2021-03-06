<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Banka;
use App\Models\Kredit;

class Klijent extends Model
{
    use HasFactory;

    protected $fillable = [
        'ime_prezime',
        'racun',
        'stanje',
        'banka_id',
    ];


    public function banka()
    {
        return $this->belongsTo(Banka::class);
    }

    public function krediti()
    {
        return $this->hasMany(Kredit::class);
    }
}
