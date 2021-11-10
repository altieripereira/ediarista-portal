<?php

namespace App\Http\Controllers;

use App\Models\Diarista;
use App\Services\ViaCep;
use Illuminate\Http\Request;


class BuscaDiaristaCep extends Controller {
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, ViaCep $viaCep) {

        $address = $viaCep->buscar($request->cep);
        if ($address) {
            $diaristas = Diarista::buscaPorCodigoIbge($address['ibge']);
            return [
                'diaristas' => $diaristas, 'quantidade_diaristas' => Diarista::quantidadePorCodigoIbge($address['ibge'])
            ];
        } else {
            return response()->json(['erro' => 'Cep inválido'], 400);
        }
    }
}
