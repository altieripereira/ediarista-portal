<?php

namespace App\Http\Requests;

use App\Rules\ValidaCep;
use App\Services\ViaCep;
use Illuminate\Foundation\Http\FormRequest;

class DiaristaRequest extends FormRequest {

    public ViaCep $viaCep;
    public function __construct(ViaCep $viaCep) {
        $this->viaCep = $viaCep;
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        $rules = [
            'nome_completo' => ['required', 'max:100'], 'cpf' => ['required', 'size:14'], 'email' => ['required', 'email', 'max:100'], 'telefone' => ['required', 'size:14'], 'logradouro' => ['required', 'max:255'], 'numero' => ['required', 'max:20'], 'bairro' => ['required', 'max:50'], 'cidade' => ['required', 'max:50'], 'numero' => ['estado', 'size:2'], 'numero' => ['required', 'max:20'], 'foto_usuario' => ['image'], 'cep' => ['required', new ValidaCep($this->viaCep)]
        ];

        if ($this->isMethod(('post'))) {
            $rules['foto_usuario'] = ['required', 'image'];
        }

        return $rules;
    }
}
