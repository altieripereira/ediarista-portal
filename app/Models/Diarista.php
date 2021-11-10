<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diarista extends Model {
    use HasFactory;

    protected $fillable = ['nome_completo', 'cpf', 'email', 'telefone', 'logradouro', 'numero', 'bairro', 'cidade', 'complemento', 'cep', 'estado', 'codigo_ibge', 'foto_usuario'];

    protected $visible = ['nome_completo', 'cidade', 'foto_usuario', 'reputacao'];

    protected $appends = ['reputacao'];

    /**
     * Adiciona atributo de url a imagem
     */
    public function getFotoUsuarioAttribute(string $valor) {
        return config('app.url') . '/' . $valor;
    }

    /**
     * Retorna reputacao randomica
     */
    public function getReputacaoAttribute($valor) {
        return mt_rand(1, 5);
    }

    /**
     * Busca diaristas por código IBGE
     */
    static public function buscaPorCodigoIbge(int $codigoIbge) {
        return self::where('codigo_ibge', $codigoIbge)->limit(6)->get();
    }

    /**
     * Busca quantidade de diaristas por código IBGE
     */
    static public function quantidadePorCodigoIbge(int $codigoIbge) {

        $qtd = self::where('codigo_ibge', $codigoIbge)->count();
        return ($qtd > 6 ? $qtd - 6 : 0);
    }
}
