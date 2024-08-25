<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Business;
use App\Models\Queja;
use App\Models\Product;

class NegocioController extends Controller
{
    public function index(Request $request)
    {
        $categ = ($request->categ > ' ') ? $request->categ : '';
        $negocios = Business::Select('businesses.*', 'tel', 'products.updated_at')
        ->join('users', 'users.id', '=', 'businesses.bsn_socio')
        ->join('products', 'products.prd_business', '=', 'businesses.id')
        ->where('prd_type','like', $categ)->orderBy('products.updated_at', 'desc')->distinct()
        ->where('bsn_status','=', '1')
        ->get();
        return $negocios;

    }

    public function getproducto($id)
    {
        $productos = Product::where('prd_business','=', $id)
        ->where('prd_status','=', '01')
        ->get();
        return $productos;
    }

    public function getquejas($id)
    {
        $quejas = Queja::where('qjs_business','=', $id)
        ->where('qjs_status','=', '1')
        ->get();
        return $quejas;
    }
}

