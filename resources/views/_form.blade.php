@csrf
<div class="mb-3">
  <label for="nome_completo" class="form-label">Nome completo</label>
  <input value="{{ @$diarista->nome_completo }}" name="nome_completo" type="text" class="form-control" id="nome_completo" maxlength="100" />
</div>
<div class="mb-3">
  <label for="cpf" class="form-label">CPF</label>
  <input value="{{ @$diarista->cpf }}" name="cpf" type="text" class="form-control cpf" id="cpf" maxlength="11" />
</div>
<div class="mb-3">
  <label for="email" class="form-label">E-mail</label>
  <input value="{{ @$diarista->email }}" name="email" type="text" class="form-control" id="email" maxlength="100" />
</div>
<div class="mb-3">
  <label for="telefone" class="form-label">Telefone</label>
  <input value="{{ @$diarista->telefone }}" name="telefone" type="text" class="form-control phone_with_ddd" id="telefone" maxlength="20" />
</div>
<div class="mb-3">
  <label for="logradouro" class="form-label">Logradouro</label>
  <input value="{{ @$diarista->logradouro }}" name="logradouro" type="text" class="form-control" id="logradouro" maxlength="20" />
</div>
<div class="mb-3">
  <label for="numero" class="form-label">Numero</label>
  <input value="{{ @$diarista->numero }}" name="numero" type="text" class="form-control" id="numero" maxlength="20" />
</div>
<div class="mb-3">
  <label for="cep" class="form-label">CEP</label>
  <input value="{{ @$diarista->cep }}" name="cep" type="text" class="form-control cep" id="cep" maxlength="20" />
</div>
<div class="mb-3">
  <label for="complemento" class="form-label">Complemento</label>
  <input value="{{ @$diarista->complemento }}" name="complemento" type="text" class="form-control" id="complemento" maxlength="20" />
</div>
<div class="mb-3">
  <label for="bairro" class="form-label">Bairro</label>
  <input value="{{ @$diarista->bairro }}" name="bairro" type="text" class="form-control" id="bairro" maxlength="20" />
</div>
<div class="mb-3">
  <label for="cidade" class="form-label">Cidade</label>
  <input value="{{ @$diarista->cidade }}" name="cidade" type="text" class="form-control" id="cidade" maxlength="20" />
</div>
<div class="mb-3">
  <label for="estado" class="form-label">Estado</label>
  <input value="{{ @$diarista->estado }}" name="estado" type="text" class="form-control" id="estado" maxlength="2" />
</div>
<div class="mb-3">
  <label for="foto_usuario" class="form-label">Foto</label>
  <input name="foto_usuario" type="file" class="form-control" id="foto_usuario" maxlength="20" />
</div>
<button type="submit" class="btn btn-primary">Salvar</button>