<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    public function index()
    {
        return Produto::all();
    }

    public function store(Request $request)
    {
        return Produto::create($request->all());
    }

    public function update(Request $request, $id)
    {
        return Produto::find($id)->update($request->all());
    }

    public function destroy($id)
    {
        return Produto::find($id)->delete();
    }
}
