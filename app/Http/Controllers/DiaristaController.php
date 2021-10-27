<?php

namespace App\Http\Controllers;

use App\Models\Diarista;
use Illuminate\Http\Request;

class DiaristaController extends Controller {


    /**
     * Lista as diaristas
     */
    public function index() {

        $diaristas = Diarista::get();

        return view('index', [
            'diaristas' => $diaristas
        ]);
    }

    /**
     * Cria uma nova diarista
     */
    public function create() {
        return view('create');
    }

    /**
     * Salva a diarista em banco
     */
    public function store(Request $request) {

        $dados = $request->except('_token');
        $dados['foto_usuario'] = $request->foto_usuario->store('public');
        $dados['cpf'] = str_replace(['.', '-'], '',  $request->cpf);
        $dados['cep'] = str_replace(['.', '-'], '',  $request->cep);
        $dados['telefone'] = str_replace(['(', ')', '-'], '',  $request->telefone);
        Diarista::create($dados);

        return redirect()->route('diaristas.index');
    }

    /**
     * Editar uma diarista
     */
    public function edit(int $id) {

        $diarista = Diarista::findOrFail($id);

        return view('edit', ['diarista' => $diarista]);
    }

    /**
     * Atualiza o registro da diarists
     */
    public function update(int $id, Request $request) {

        $diarista = Diarista::findOrFail($id);
        $dados = $request->except('_token', '_method');
        $dados['cpf'] = str_replace(['.', '-'], '',  $request->cpf);
        $dados['cep'] = str_replace(['.', '-'], '',  $request->cep);
        $dados['telefone'] = str_replace(['(', ')', '-'], '',  $request->telefone);

        if ($request->hasFile('foto_usuario')) {
            $dados['foto_usuario'] = $request->foto_usuario->store('public');
        }

        $diarista->update($dados);

        return redirect()->route('diaristas.index');
    }

    /**
     * Apaga uma diarista do banco de dados
     */
    public function destroy(int $id) {

        $diarista = Diarista::findOrFail($id);
        $diarista->delete();

        return redirect()->route('diaristas.index');
    }
}
