<div class="col-md-12">
    <div wire:loading> 
        Redirecionando...
    </div>
    <div class="form-container">
        
        <form wire:submit="submit" id="privacyForm" data-toggle="validator" data-focus="false">
            <div class="text-container mb-0 mt-5">
                <h3>Informações da empresa</h3>
            </div>
            <div class="form-group">
                <label class="form-label" for="pname">Nome da empresa</label>
                <input placeholder="Infome o nome da sua empresa" type="text" wire:model='name_company' class="form-control form-register" id="company" required>
                <div class="help-block with-errors">
                    @error('name_company')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="row g-2">
                <div class="col-md">
                    <div class="form-group">
                        <label class="form-label" for="email">Email da empresa</label>
                        <input placeholder="ex: empresa@exemplo.com" type="email" wire:model='email' class="form-control form-register" id="floatingInputGrid" required>
                    </div>
                    <div class="help-block with-errors">
                        @error('email')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-group">
                        <label class="form-label" for="cnpj">CNPJ</label>
                        <input placeholder="(##.###.###/####-##)" type="text" wire:model='cnpj' class="form-control form-register" id="cnpj" required>
                    </div>
                    <div class="help-block with-errors">
                        @error('cnpj')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row g-2">
                <div class="col-md">
                    <div class="form-group">
                        <label class="form-label" for="phone_sender">Telefone (Opcional)</label>
                        <input placeholder="(99) 9 9999-9999" type="phone" wire:model='phone_sender' class="form-control form-register"
                            id="floatingInputGrid">
                    </div>
                    <div class="help-block with-errors">
                        @error('phone_sender')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-group">
                        <label class="form-label" for="instagram">Instagram (Opcional)</label>
                        <input placeholder="ex: elon_musk, joao_123" type="text" wire:model='instagram' class="form-control form-register" id="instagram">
                    </div>
                    <div class="help-block with-errors">
                        @error('instagram')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
               
            </div>
            <div class="form-group">
                <label class="form-label" for="slogan">Slogan (Opcinal)</label>
                <input placeholder="Informe o seu slogan" type="text" wire:model='slogan' class="form-control form-register" id="slogan">
                <div class="help-block with-errors">
                    @error('slogan')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            {{-- <div class="row g-2">
                <div class="col-md">
                    <div class="form-group">

                    <label class="form-label" for="marca_dagua">Marca d'agua</label>

                    <div class="input-group">

                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                        </div>
                        <div class="custom-file">
                          <input  wire:model='marca_dagua' type="file" class="custom-file-input" id="inputGroupFile01"
                            aria-describedby="inputGroupFileAddon01">
                          <label class="custom-file-label" for="inputGroupFile01">Procurar</label>
                        </div>
                        <div class="help-block with-errors">
                            @error('marca_dagua')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                      </div>
                </div>
                

                    <div class="help-block with-errors">
                        @error('marca_dagua')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md">
                    <label class="form-label" for="phone_sender">Logo da Empresa</label>

                    <div class="input-group">

                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                        </div>
                        <div class="custom-file">
                          <input  wire:model='photo' type="file" class="custom-file-input" id="inputGroupFile01"
                            aria-describedby="inputGroupFileAddon01">
                          <label class="custom-file-label" for="inputGroupFile01">Procurar</label>
                        </div>
                        <div class="help-block with-errors">
                            @error('photo')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                      </div>
                   
                </div>
                
            </div> --}}

            <div class="form-group">
                <label class="form-label" for="description">Descrição da empresa (Opcional)</label>
                <textarea rows="4" placeholder="Descreva brevemente sobre a sua empresa..." class="form-control form-register" wire:model='description' id="description"></textarea>
                <div class="help-block with-errors">
                    @error('description')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
            </div>


            <div class="text-container mb-0 mt-5">
                <h3>Informações de endereço da empresa</h3>
            </div>

            <div class="row g-2">
                <div class="col-md">
                    <div class="form-group">
                        <label class="form-label" for="cep">Cep</label>
                        <input placeholder="(## ### ###)" required wire:model.live.debounce.150ms="cep" type="text" class="form-control form-register"
                            id="cep">
                    </div>
                    <div class="help-block with-errors">
                        @error('cep')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-group">
                        <label class="form-label" for="state">Estado</label>
                        <input placeholder="ex: SP, SC, RJ" wire:model="state" value="{{ $state }}" type="text"
                            class="form-control form-register" id="state" required>
                    </div>
                    <div class="help-block with-errors">
                        @error('state')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row g-2">
                <div class="col-md">
                    <div class="form-group">
                        <label class="form-label" for="street">Rua</label>
                        <input placeholder="informe a sua rua" wire:model="street" value="{{ $street }}" type="text"
                            class="form-control form-register" id="street" required>
                    </div>
                    <div class="help-block with-errors">
                        @error('street')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-group">
                        <label class="form-label" for="city">Cidade</label>
                        <input placeholder="ex: São paulo, salvador" wire:model='city' value="{{ $city }}" type="text"
                            class="form-control form-register" id="city" required>
                    </div>
                    <div class="help-block with-errors">
                        @error('city')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row g-2">
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="form-label" for="neighborhood">Bairro</label>
                        <input placeholder="ex: centro, São pedro" wire:model="neighborhood" value="{{ $neighborhood }}" type="text"
                            class="form-control form-register" id="neighborhood" required>
                    </div>
                    <div class="help-block with-errors">
                        @error('neighborhood')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="form-label" for="complement">Complemento</label>
                        <input placeholder="ex: 2 andar" wire:model="complement" value="{{ $complement }}" type="text"
                            class="form-control form-register" id="complement">
                    </div>
                    <div class="help-block with-errors">
                        @error('complement')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="form-label" for="number">Número</label>
                        <input placeholder="ex: 123, 45" wire:model="number" required type="text" class="form-control form-register" id="number">
                    </div>
                    <div class="help-block with-errors">
                        @error('number')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="text-container mb-0 mt-5">
                <h3>Informações do usuario</h3>
            </div>
            <div class="row g-2">
                <div class="col-md">
                    <div class="form-group">
                        <label class="form-label" for="name_user">Nome do Usuário</label>
                        <input placeholder="Informe o seu nome" type="text" required wire:model='name_user' class="form-control form-register"
                            id="name_user">
                    </div>
                    <div class="help-block with-errors">
                        @error('name_user')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-group">
                        <label class="form-label" for="email">Email</label>
                        <input placeholder="Informe o seu email" required type="email" wire:model='email_user' class="form-control form-register"
                            id="floatingInputGrid">
                    </div>
                    <div class="help-block with-errors">
                        @error('email_user')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row g-2">
                <div class="col-md">
                    <div class="form-group">
                        <label class="form-label" for="password">Senha</label>
                        <input placeholder="Informe a sua senha" required type="password" wire:model.live='password' class="form-control form-register" id="password">
                    </div>
                    <div class="help-block with-errors">
                        @error('password')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-group">
                        <label class="form-label" for="confirm_password">Confirmar senha</label>
                        <input placeholder="Confirme a sua senha" required type="password" wire:model.live='confirm_password' class="form-control form-register"
                            id="confirm_password">
                    </div>
                    <div class="help-block with-errors">
                        @error('confirm_password')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>

    </div>
    <div class="row">
        <div class="col-md-12 d-flex flex-row-reverse">
            <div class="form-group col-md-3 col-12">
                <div class="button-wrapper">
                    <button type="submit" class="btn-solid-reg page-scroll" >IR PARA O PAGAMENTO</button>
                </div>
            </div>
        </div>
    </div>

    </form>
</div>



</div>
