<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes=Cliente::paginate(10);
        return view('listado',compact('clientes'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('clientes.agregar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre'=>'required',
            'tipo'=>'required',
            'tipodoc'=>'required',
            'cuit'=>'required|numeric'
            
        ]);
        $cliente = new Cliente();
        $cliente->nombre = $request->input('nombre');
        $cliente->tipo = $request->input('tipo');
        $cliente->factipo =$request->input('tipodoc');
        $cliente->correo_electronico = $request->input('email');
        $cliente->cuit = $request->input('cuit');
        $cliente->save();

        return redirect(route('principal'))->with('success','Cliente  agregado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
                // Obtener solo 1 registro
                $cliente=Cliente::find($id);
                return view('eliminar',compact( 'cliente' ) );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
                //Elimmina un registro
       $cliente=Cliente::find($id);
       $cliente->delete();
       return redirect()->route('principal')->with('eliminado','Cliente eliminado');
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $clientes = DB::table('clientes')->where('nombre', 'like', '%' . $search . '%')->paginate(5);
        return view('clientes.index',compact('clientes'));
    }
    

}
