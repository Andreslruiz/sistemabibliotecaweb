<?php

namespace App\Http\Controllers;

use App\Models\UserPrestamo;
use Illuminate\Http\Request;

/**
 * Class UserPrestamoController
 * @package App\Http\Controllers
 */
class UserPrestamoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userPrestamos = UserPrestamo::paginate();

        return view('user-prestamo.index', compact('userPrestamos'))
            ->with('i', (request()->input('page', 1) - 1) * $userPrestamos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $userPrestamo = new UserPrestamo();
        return view('user-prestamo.create', compact('userPrestamo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(UserPrestamo::$rules);

        $userPrestamo = UserPrestamo::create($request->all());

        return redirect()->route('user-prestamos.index')
            ->with('success', 'UserPrestamo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $userPrestamo = UserPrestamo::find($id);

        return view('user-prestamo.show', compact('userPrestamo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $userPrestamo = UserPrestamo::find($id);

        return view('user-prestamo.edit', compact('userPrestamo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  UserPrestamo $userPrestamo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserPrestamo $userPrestamo)
    {
        request()->validate(UserPrestamo::$rules);

        $userPrestamo->update($request->all());

        return redirect()->route('user-prestamos.index')
            ->with('success', 'UserPrestamo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $userPrestamo = UserPrestamo::find($id)->delete();

        return redirect()->route('user-prestamos.index')
            ->with('success', 'UserPrestamo deleted successfully');
    }
}
