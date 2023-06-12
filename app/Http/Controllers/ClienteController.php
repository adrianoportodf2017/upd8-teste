<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{



    public function index()
    {
        return view('clientes');
    }

    public function getAll()
    {
        $clientes = Cliente::all();
        return response()->json($clientes);
    }

    public function getCliente()
    {
        return view('editar-cliente');

    }
   
     public function store(Request $request)
    {
        $cliente = new Cliente;
        $cliente->nome = $request->nome;
        $cliente->cpf = $request->cpf;
        $cliente->data_nascimento = $request->data_nascimento;
        $cliente->endereco = $request->endereco;

        $cliente->estado = $request->estado;
        $cliente->cidade = $request->cidade;
        $cliente->sexo = $request->sexo;
        $cliente->save();

        return response()->json($cliente, 201);
    }

    public function show($id)
    {
        $cliente = Cliente::findOrFail($id);
        return response()->json($cliente);
    }

    public function update(Request $request, $id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->nome = $request->nome;
        $cliente->cpf = $request->cpf;
        $cliente->data_nascimento = $request->data_nascimento;
        $cliente->endereco = $request->endereco;
        $cliente->estado = $request->estado;
        $cliente->cidade = $request->cidade;
        $cliente->sexo = $request->sexo;
        $cliente->save();

        return response()->json($cliente);
    }

    public function destroy($id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();
    
        return response()->json(null, 204);
    }

    public function create()
    {
        return view('cadastro-cliente');
    }
}
