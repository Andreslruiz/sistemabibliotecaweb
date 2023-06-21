<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use Illuminate\Http\Request;

/**
 * Class AutorController
 * @package App\Http\Controllers
 */
class AutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $autors = Autor::paginate();

        return view('autor.index', compact('autors'))
            ->with('i', (request()->input('page', 1) - 1) * $autors->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $autor = new Autor();
        return view('autor.create', compact('autor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Autor::$rules);

        $autor = Autor::create($request->all());

        return redirect()->route('autors.index')
            ->with('success', 'Autor creado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $autor = Autor::find($id);

        return view('autor.show', compact('autor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $autor = Autor::find($id);

        return view('autor.edit', compact('autor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Autor $autor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Autor $autor)
    {
        request()->validate(Autor::$rules);

        $autor->update($request->all());

        return redirect()->route('autors.index')
            ->with('success', 'Autor updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $autor = Autor::find($id)->delete();

        return redirect()->route('autors.index')
            ->with('success', 'Autor eliminado exitosamente');
    }
}
