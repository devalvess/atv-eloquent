<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{

    public function create()
    {
        return view('/create');
    }

    public function store(Request $request)
    {
       $client = Client::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'id_number'=>$request->id_number
        ]);

        return response()->json($client);
    }

    public function show($client)
    {
        $cliente = Client::find($client);

        return response()->json($cliente);
          
    }

    public function name(Request $request)
    {
        $nome = Model::where('name', "=",'Jose')->firts();

        return response()->json($nome);

    }
 
}
