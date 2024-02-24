<?php

namespace App\Http\Controllers;

use App\Models\Kategoria;
use Illuminate\Http\Request;

class KategoriaController extends Controller
{
    // appends használatakor
    public function index()
    {
        return Kategoria::all();
    }

    /*  
    // with-es megoldás
 public function index()
    {
        return Kategoria::with('kategoriaja:id,nev')->get();
    } */

    public function show($id)
    {
        return response()->json(Kategoria::find($id));
    }

    public function store(Request $request)
    {
        (new Kategoria())->fill($request->all())->save();
    }

    public function update(Request $request, $id)
    {
        (Kategoria::findorFail($id))->fill($request->all())->save();
    }
    public function destroy($id)
    {
        Kategoria::findOrFail($id)->delete();
    }
}
