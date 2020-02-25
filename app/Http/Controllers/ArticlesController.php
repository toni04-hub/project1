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

     
    public function store(Request $request){
        //$data = request()->all();

        // Article::create([
        //     'autor' => $data['autor'],
        //     'title'  => $data['title'],
        //     'body'   => $data['body']
        // ]);
       
        $validateData = $request->validate([
            'autor' => 'required',
            'title' => 'required | unique:articles',
            'body'  => 'required'
        ]);
        

       
        $articulo = new Article;
        $articulo->autor = $request->autor;
        $articulo->title = $request->title;
        $articulo->body = $request->body;
        
        $articulo->save();


        //return redirect()->route('todos_articulos');
        return redirect('/articulos');
    }
}
