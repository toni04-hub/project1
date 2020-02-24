<?php

namespace App\Http\Controllers;
use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index(){
        $articulos = Article::all();
        return view('articulos.index', compact('articulos'));
    }

    public function show($id){
        $articulo = Article::find($id);

        return view('articulos.show', compact('articulo'));
    }

    public function crear(){
        return view('articulos.crear');
    }

    public function store(){
        dd(request()->all());
        return "insertando nuevo Articulo";
    }
}
