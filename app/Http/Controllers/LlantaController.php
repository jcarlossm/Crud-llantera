<?php

namespace App\Http\Controllers;
use App\Models\Llanta;
use Illuminate\Http\Request;
use IlluminateSupportFacadesRoute;

class LlantaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $llantas = Llanta::paginate(10);
        return view('index', compact('llantas'));
    }

    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'anchoLlanta' => 'numeric|required',
            'diametroRin' => 'numeric|required',
            'presionMax' => 'numeric|required',
            'fabricante' => 'required|unique:llantas,fabricante,nombre',
            'stock' => 'numeric|required',
        ]);

        Llanta::create($request->all());

        return redirect()->route('llanta.index')
            ->with('success', 'created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $post = Llanta::find($id);

        // return view('posts.show', compact('llantagdfg'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre' => 'required',
            'anchoLlanta' => 'numeric|required',
            'diametroRin' => 'numeric|required',
            'presionMax' => 'numeric|required',
            'fabricante' => 'required',
            'stock' => 'numeric|required',
        ]);

        $llantas = Llanta::find($id);
        $llantas->update($request->all());

        return redirect()->route('llanta.index')
            ->with('success', 'updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $llantas = Llanta::find($id);
        $llantas->delete();

        return redirect()->route('llanta.index')
            ->with('success', ' deleted successfully');
    }


    public function edit($id)
    {
        $llantas = Llanta::find($id);

        return view('edit', compact('llantas'));
    }
}
