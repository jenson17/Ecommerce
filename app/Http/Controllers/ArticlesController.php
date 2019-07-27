<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\ArticleFormEditRequest;
use App\Http\Requests\ArticleFormRequest;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {

            $article = Article::where('status', '=', 'activo')->get();

            return response()->json($article);

        } else {
            return view('adm.template.main');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleFormRequest $request)
    {
        try {

            $article              = new Article();
            $article->nombre      = $request->nombre;
            $article->descripcion = $request->descripcion;

            if (!is_null($request->file('foto'))):

                $imagen = $request->file('foto');

                $url = '/storage/' . $imagen->store('img/articles', 'public');

                $article->foto_url = $url;

            else:
                $article->foto_url = "usuario.png";
            endif;

            $article->precio = $request->precio;

            $article->save();

            return response()->json([
                'success' => true,
                'mensaje' => 'Artículo creado con éxito',
            ]);

        } catch (Exception $e) {

            return response()->json([
                'error' => $e . getMessage(),
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {

            $article = Article::findOrFail($id);

            return response()->json([
                'success'     => true,
                'id'          => $article->id,
                'nombre'      => $article->nombre,
                'descripcion' => $article->descripcion,
                'foto'        => $article->foto_url,
                'precio'      => $article->precio,
            ]);

        } catch (Exception $e) {

            return response()->json([
                'error' => $e . getMessage(),
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleFormEditRequest $request, $id)
    {
        try {

            $article = Article::findOrFail($id);

            $article->nombre      = $request->nombre;
            $article->descripcion = $request->descripcion;
            $article->precio      = $request->precio;

            $article->update();

            return response()->json([
                'success' => true,
                'mensaje' => 'Artículo editado correctamente',
            ]);

        } catch (Exception $e) {

            return response()->json([
                'error' => $e . getMessage(),
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {

            $article         = Article::findOrFail($id);
            $article->status = "inactivo";
            $article->save();

            return response()->json([
                'success' => true,
                'mensaje' => 'Artículo eliminado con éxito',
            ]);

        } catch (Exception $e) {
            return response()->json([
                'error' => $e . getMessage(),
            ]);
        }
    }
}
