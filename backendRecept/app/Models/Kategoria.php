<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategoria extends Model
{
    use HasFactory;

    protected $fillable=[
        "nev"
    ];

    public static $tipusok = ["főétel", "leves", "édesség", "saláta"];
}
