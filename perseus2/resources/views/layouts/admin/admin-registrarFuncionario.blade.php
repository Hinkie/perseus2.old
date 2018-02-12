@extends('layouts.admin.admin-master')
@section('conteudo')

	<div class="container">
		<form method="POST" action="{{ route('register') }}">
			{{ csrf_field() }}
			<div class="form-row">
				<div class="form-group col-md-6 {{ $errors->has('nome') ? ' has-error' : '' }}">
					<label>Nome</label>
					<input type="text"  class="form-control" id="nome"   value="{{ old('nome') }}" name="nome" required>
						@if ($errors->has('nome'))
						    <span class="help-block">
						        <strong>{{ $errors->first('nome') }}</strong>
						    </span>
						@endif
				</div>
				<div class="form-group col-md-6 {{ $errors->has('sobrenome') ? ' has-error' : '' }}">
					<label>Sobrenome</label>
					<input type="text"  class="form-control" id="sobrenome"   value="{{ old('sobrenome') }}" name="sobrenome" required>
						@if ($errors->has('sobrenome'))
						    <span class="help-block">
						        <strong>{{ $errors->first('sobrenome') }}</strong>
						    </span>
						@endif
				</div>
			</div>
			{{-- Documentos --}}
			<div class="form-row">
				<div class="form-group col-md-2 {{ $errors->has('data_nascimento') ? ' has-error' : '' }}">
					<label>Data de Nascimento</label>
					<input type="text"  class="form-control" id="data_nascimento"   value="{{ old('data_nascimento') }}" name="data_nascimento" onkeypress="mascara(this, '##/##/####')" required>
						@if ($errors->has('data_nascimento'))
						    <span class="help-block">
						        <strong>{{ $errors->first('data_nascimento') }}</strong>
						    </span>
						@endif
				</div>
				<div class="form-group col-md-2 {{ $errors->has('rg') ? ' has-error' : '' }}">
					<label>RG</label>
					<input type="text"  class="form-control" id="rg"   value="{{ old('rg') }}" name="rg" required>
						@if ($errors->has('rg'))
						    <span class="help-block">
						        <strong>{{ $errors->first('rg') }}</strong>
						    </span>
						@endif
				</div>
				<div class="form-group col-md-2 {{ $errors->has('orgao_emissor') ? ' has-error' : '' }}">
					<label>Orgão emissor</label>
					<input type="text"  class="form-control" id="orgao_emissor"   value="{{ old('orgao_emissor') }}" name="orgao_emissor" required>
						@if ($errors->has('orgao_emissor'))
						    <span class="help-block">
						        <strong>{{ $errors->first('orgao_emissor') }}</strong>
						    </span>
						@endif
				</div>
				<div class="form-group col-md-2 {{ $errors->has('data_emissao') ? ' has-error' : '' }}">
					<label>Data de emissão</label>
					<input type="text"  class="form-control" id="data_emissao"   value="{{ old('data_emissao') }}" name="data_emissao" required>
						@if ($errors->has('data_emissao'))
						    <span class="help-block">
						        <strong>{{ $errors->first('data_emissao') }}</strong>
						    </span>
						@endif
				</div>
				<div class="form-group col-md-2 {{ $errors->has('cpf') ? ' has-error' : '' }}">
					<label>CPF</label>
					<input type="text"  class="form-control" id="cpf"   value="{{ old('cpf') }}" name="cpf" required onkeypress="mascara(this, '#########-##')">
						@if ($errors->has('cpf'))
						    <span class="help-block">
						        <strong>{{ $errors->first('cpf') }}</strong>
						    </span>
						@endif
				</div>
				<div class="form-group col-md-2 {{ $errors->has('naturalidade') ? ' has-error' : '' }}">
					<label>Naturalidade</label>
					<input type="text"  class="form-control" id="naturalidade"   value="{{ old('naturalidade') }}" name="naturalidade" >
						@if ($errors->has('naturalidade'))
						    <span class="help-block">
						        <strong>{{ $errors->first('naturalidade') }}</strong>
						    </span>
						@endif
				</div>
				<div class="form-group col-md-2 {{ $errors->has('estado_civil') ? ' has-error' : '' }}">
					<label>Estado Civil</label>
					<input type="text"  class="form-control" id="estado_civil"   value="{{ old('estado_civil') }}" name="estado_civil" required>
						@if ($errors->has('estado_civil'))
						    <span class="help-block">
						        <strong>{{ $errors->first('estado_civil') }}</strong>
						    </span>
						@endif
				</div>
				<div class="form-group col-md-4 {{ $errors->has('nome_mae') ? ' has-error' : '' }}">
					<label>Nome da mãe</label>
					<input type="text"  class="form-control" id="nome_mae"   value="{{ old('nome_mae') }}" name="nome_mae" required>
						@if ($errors->has('nome_mae'))
						    <span class="help-block">
						        <strong>{{ $errors->first('nome_mae') }}</strong>
						    </span>
						@endif
				</div>
				<div class="form-group col-md-6 {{ $errors->has('nome_pai') ? ' has-error' : '' }}">
					<label>Nome do Pai</label>
					<input type="text"  class="form-control" id="nome_pai"   value="{{ old('nome_pai') }}" name="nome_pai" required>
						@if ($errors->has('nome_pai'))
						    <span class="help-block">
						        <strong>{{ $errors->first('nome_pai') }}</strong>
						    </span>
						@endif
				</div>
			</div>	
			{{-- endereco --}}
			<div class="form-row">
				<div class="form-group col-md-5 {{ $errors->has('logradouro') ? ' has-error' : '' }}">
					<label>Endereço</label>
					<input type="text"  class="form-control" id="endereco"   value="{{ old('logradouro') }}" name required>
						@if ($errors->has('logradouro'))
						    <span class="help-block">
						        <strong>{{ $errors->first('logradouro') }}</strong>
						    </span>
						@endif
				</div>
				<div class="form-group col-md-1 {{ $errors->has('numero') ? ' has-error' : '' }}">
					<label>Numero</label>
					<input type="text"  class="form-control" id="numero"   value="{{ old('numero') }}" name="numero" required>
						@if ($errors->has('numero'))
						    <span class="help-block">
						        <strong>{{ $errors->first('numero') }}</strong>
						    </span>
						@endif
				</div>
				<div class="form-group col-md-3 {{ $errors->has('complemento') ? ' has-error' : '' }}">
					<label>Complemento</label>
					<input type="text"  class="form-control" id="complemento"   value="{{ old('complemento') }}" name="complemento" required>
						@if ($errors->has('complemento'))
						    <span class="help-block">
						        <strong>{{ $errors->first('complemento') }}</strong>
						    </span>
						@endif
				</div>	
				<div class="form-group col-md-3 {{ $errors->has('bairro') ? ' has-error' : '' }}">
					<label>Bairro</label>
					<input type="text"  class="form-control" id="bairro"   value="{{ old('bairro') }}" name="bairro" required>
						@if ($errors->has('bairro'))
						    <span class="help-block">
						        <strong>{{ $errors->first('bairro') }}</strong>
						    </span>
						@endif
				</div>
			</div>	
			<div class="form-row">
				<div class="form-group col-md-5 {{ $errors->has('cidade') ? ' has-error' : '' }}">
					<label>Cidade</label>
					<input type="text"  class="form-control" id="cidade"   value="{{ old('cidade') }}" name="cidade" required>
						@if ($errors->has('cidade'))
						    <span class="help-block">
						        <strong>{{ $errors->first('cidade') }}</strong>
						    </span>
						@endif
				</div>
				<div class="form-group col-md-1 {{ $errors->has('uf') ? ' has-error' : '' }}">
					<label>UF</label>
					<input type="text"  class="form-control" id="uf"   value="{{ old('uf') }}" name="uf" required>
						@if ($errors->has('uf'))
						    <span class="help-block">
						        <strong>{{ $errors->first('uf') }}</strong>
						    </span>
						@endif
				</div>
				<div class="form-group col-md-3 {{ $errors->has('cep') ? ' has-error' : '' }}">
					<label>CEP</label>
					<input type="text"  class="form-control" id="cep"   value="{{ old('cep') }}" name="cep" onkeypress="mascara(this, '#####-###')" required>
						@if ($errors->has('cep'))
						    <span class="help-block">
						        <strong>{{ $errors->first('cep') }}</strong>
						    </span>
						@endif
				</div>
			</div>	
			{{-- Contato --}}
			<div class="form-row">
				<div class="form-group col-md-6 {{ $errors->has('email') ? ' has-error' : '' }}">
					<label>Email</label>
					<input type="text"  class="form-control" id="email"   value="{{ old('email') }}" name="email" required>
						@if ($errors->has('email'))
						    <span class="help-block">
						        <strong>{{ $errors->first('email') }}</strong>
						    </span>
						@endif
				</div>
				<div class="form-group col-md-3 {{ $errors->has('fixo') ? ' has-error' : '' }}">
					<label>Telefone fixo com DDD</label>
					<input type="text"  class="form-control" id="fixo"   value="{{ old('fixo') }}" name="fixo"  onkeypress="mascara(this, '##-####-####')">
						@if ($errors->has('fixo'))
						    <span class="help-block">
						        <strong>{{ $errors->first('fixo') }}</strong>
						    </span>
						@endif
				</div>
				<div class="form-group col-md-3 {{ $errors->has('celular') ? ' has-error' : '' }}">
					<label>Celular com DDD</label>
					<input type="text"  class="form-control" id="celular"   value="{{ old('celular') }}" name="celular"  onkeypress="mascara(this, '##-#####-####')" >
						@if ($errors->has('celular'))
						    <span class="help-block">
						        <strong>{{ $errors->first('celular') }}</strong>
						    </span>
						@endif
				</div>
			</div>
			{{-- Usuario e funcao --}}
			<div class="form-row">
				<div class="form-group col-md-3 {{ $errors->has('funcao') ? ' has-error' : '' }}">
					<label>Função</label>
					<input type="text"  class="form-control" id="funcao"   value="{{ old('funcao') }}" name="funcao" required>
						@if ($errors->has('funcao'))
						    <span class="help-block">
						        <strong>{{ $errors->first('funcao') }}</strong>
						    </span>
						@endif
				</div>
				<div class="form-group col-md-3 {{ $errors->has('username') ? ' has-error' : '' }}">
					<label>Usuario</label>
					<input type="text"  class="form-control" id="username"   value="{{ old('username') }}" name="username" required>
						@if ($errors->has('username'))
						    <span class="help-block">
						        <strong>{{ $errors->first('username') }}</strong>
						    </span>
						@endif
				</div>
				<div class="form-group col-md-3 {{ $errors->has('password') ? ' has-error' : '' }}">
					<label>Senha</label>
					<input type="password"  class="form-control" id="password"  name="password" required>
						@if ($errors->has('password'))
						    <span class="help-block">
						        <strong>{{ $errors->first('password') }}</strong>
						    </span>
						@endif
				</div>
				<div class="form-group col-md-3 {{ $errors->has('password_confimartion') ? ' has-error' : '' }}">
					<label>Confirmar senha</label>
					<input type="text"  class="form-control" id="password_confimartion"  nome="password_confimartion" required>
						@if ($errors->has('password_confimartion'))
						    <span class="help-block">
						        <strong>{{ $errors->first('password_confimartion') }}</strong>
						    </span>
						@endif
				</div>
				<div class="form-group col-md-3">
			        <button type="submit" class="btn btn-primary">
			            Cadastrar
			        </button>
				</div>
			</div>				
		</form>
	</div>

@endsection
