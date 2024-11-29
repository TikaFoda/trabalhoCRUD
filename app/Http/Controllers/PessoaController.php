<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pessoas;

class PessoaController extends Controller
{
    public function index(){
        $pessoas = pessoas::all();
        return view('pessoas.index',compact('pessoas'));
    }
    public function create(){
        return view('pessoas.create');
    }

    public function store(Request $request){
        $request->validate([
            'nome' => 'required|string|max:255',
            'fone' => 'required|string|max:20',
            'email' => 'required|email|max:255|unique:pessoas',
        ]);
        pessoas::create([
            'nome' => $request->nome,
            'fone' => $request->fone,
            'email' => $request->email,
        ]);
        return redirect()-> route('pessoas.create')->with('success','pessoa cadastrada com sucesso');
    }
    public function destroy($id){
    $pessoa = pessoas::findOrFail($id);
    $pessoa->delete();
    return redirect()->route('pessoas.index')->with('success', 'Pessoa deletada com sucesso');
    }
    public function edit($id){
        $pessoa = Pessoas::findOrFail($id);
        return view('pessoas.edit', compact('pessoa'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'nome' => 'required|string|max:255',
            'fone' => 'required|string|max:20',
            'email' => 'required|email|max:255|unique:pessoas,email,' . $id,
        ]);

        $pessoa = Pessoas::findOrFail($id);
        $pessoa->update([
            'nome' => $request->nome,
            'fone' => $request->fone,
            'email' => $request->email,
        ]);

        return redirect()->route('pessoas.index')->with('success', 'Usuário atualizado com sucesso.');
    }

} 

