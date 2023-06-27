<?php

namespace App\Http\Controllers;

use App\Models\Ejemplar;
use Illuminate\Http\Request;

/**
 * Class EjemplarController
 * @package App\Http\Controllers
 */
class EjemplarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ejemplars = Ejemplar::paginate();

        return view('ejemplar.index', compact('ejemplars'))
            ->with('i', (request()->input('page', 1) - 1) * $ejemplars->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ejemplar = new Ejemplar();
        return view('ejemplar.create', compact('ejemplar'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Ejemplar::$rules);

        $ejemplar = Ejemplar::create($request->all());

        return redirect()->route('ejemplars.index')
            ->with('success', 'Ejemplar created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ejemplar = Ejemplar::find($id);

        return view('ejemplar.show', compact('ejemplar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ejemplar = Ejemplar::find($id);

        return view('ejemplar.edit', compact('ejemplar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Ejemplar $ejemplar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ejemplar $ejemplar)
    {
        request()->validate(Ejemplar::$rules);

        $ejemplar->update($request->all());

        return redirect()->route('ejemplars.index')
            ->with('success', 'Ejemplar updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $ejemplar = Ejemplar::find($id)->delete();

        return redirect()->route('ejemplars.index')
            ->with('success', 'Ejemplar deleted successfully');
    }
}
