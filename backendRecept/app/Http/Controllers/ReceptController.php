<?php

namespace App\Http\Controllers;

use App\Models\Recept;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReceptController extends Controller
{
    // appends használatakor
    public function index()
    {
        return Recept::all();
    }

    /*  
    // with-es megoldás
 public function index()
    {
        return Recept::with('kategoriaja:id,nev')->get();
    } */

    public function show($id)
    {
        return response()->json(Recept::find($id));
    }

    public function store(Request $request)
    {
        (new Recept())->fill($request->all())->save();
    }

    public function update(Request $request, $id)
    {
        (Recept::findorFail($id))->fill($request->all())->save();
    }
    public function destroy($id)
    {
        Recept::findOrFail($id)->delete();
    }

    public function filterByCategory($cat)
    {
        return DB::table("recepts")
            ->where('kat_id', $cat)
            ->get();
    }

    public function leiro()
    { {
            return [
                "fejlec" => [
                    "Név", "Kategória"

                ],
                "teljes" => [
                    "Név", "Kategória", "Leírás", "Dátum", "Kép"
                ]
            ];
        }
    }
}
