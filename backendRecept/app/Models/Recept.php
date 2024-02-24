<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recept extends Model
{
    use HasFactory;

    protected $fillable = [
        "nev",
        "kat_id",
        "leiras",
        "datum",
        "kep_eleresi_ut"
    ];

    protected $hidden = ["created_at", "updated_at"];

    protected $appends = ["kategoria"];

    public function getKategoriaAttribute()
    {
        return Kategoria::find($this->kat_id)->nev;
    }


    public static $urls = [
        "https://receptneked.hu/wp-content/uploads/2021/06/54302200_m-1.jpg",
        "https://lh3.googleusercontent.com/proxy/HuP6Oz9vDjpNLwCpxJ9ihquks6FRfwjwzgm-Yf5i7pQBBsy-WyyPsm05hx_zQIdoC3eUST-ibc6AfT52kWFGkuAPIOizECQ0rTxH0GsowP5RAch8hNqTwJfrS5BkZjjQ321U-4wxILJEg1yQV_IhywEy7wI",
        "https://www.mindmegette.hu/images/101/O/112987_etelfoto2-201510171222.jpg"
    ];
}
