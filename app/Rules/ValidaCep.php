<?php

namespace App\Rules;

use App\Services\ViaCep;
use Illuminate\Contracts\Validation\Rule;

class ValidaCep implements Rule {

    public ViaCep $viaCep;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct(ViaCep $viaCep) {
        $this->viaCep = $viaCep;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value) {
        $_cep = $value;
        $_cep = str_replace(['.', '-'], '',  $_cep);

        return !!$this->viaCep->buscar($_cep);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message() {
        return 'CEP inválido';
    }
}
