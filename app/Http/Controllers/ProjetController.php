<?php

namespace App\Http\Controllers;

use App\Projet;
use Illuminate\Http\Request;

use App\Http\Requests;

class ProjetController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projets = Projet::all();
        return view('projets.index')
            ->with(compact('projets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projet = new Projet();
        return view('projets.create', compact('projet'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\ProjetsRequest $request)
    {
        Projet::create($request->only('name','tel','email','adresse','description','type','context','objectif','contrainte'));
        return redirect(action('ProjetController@index'))->with('success','Le projet a bien été créée.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $projet = Projet::find($id);
        return view('projets.show', compact('projet'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $projet = Projet::find($id);
        return view('projets.edit', compact('projet'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\ProjetsRequest $request, $id)
    {
        $projet=Projet::findOrFail($id);

        $projet->update($request->only('name','email','tel','adresse','description','type','context','objectif','contrainte'));
        return redirect(action('ProjetController@index'))->with('success','Le projet a bien été modifier.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $projet = Projet::findorFail($id);

        $projet->delete($projet->all());
        return redirect(action('ProjetController@index'))->with('success','Le projet a bien été Supprimer.');

    }
}
