<?php

namespace App\Http\Controllers;

use App\Models\Recept;
use Illuminate\Http\Request;

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
}
