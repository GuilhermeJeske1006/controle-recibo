<form wire:submit="save" class="mx-auto">
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    @if (session('error'))
        <div class="alert alert-success">
            {{ session('error') }}
        </div>
    @endif
    <div class="relative z-0 w-full mb-5 group">
        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome do Pagador</label>
        <input wire:model="payer" type="text" id="name"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Seu nome ..." required />
    </div>
    <div class="grid md:grid-cols-2 md:gap-6">
        <div class="relative z-0 w-full mb-5 group">
            <label for="value" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Valor
                recebido</label>
            <input wire:model="value" type="text" id="value" name="valor"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="R$" required />
        </div>
        <div class="relative z-0 w-full mb-5 group">
            <label for="cpf" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">CPF ou CNPJ
                (opcional):
            </label>
            <input wire:model="cpf_payer" type="cpf" id="cpf" name='cpf'
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="(###.###.###-##)" />
        </div>
    </div>
    <div class="relative z-0 w-full mb-5 group">
        <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Referente à</label>
        <input wire:model="referent" type="text" id="text"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="referente a ..." required />
    </div>
    <div class="grid md:grid-cols-2 md:gap-6">
        <div class="relative z-0 w-full mb-5 group">
            <label for="city" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cidade</label>
            <input wire:model="city" type="text" id="city"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="São Paulo, Rio de janeiro ..." required />
        </div>
        <div class="relative z-0 w-full mb-5 group">
            <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Data</label>
            <input wire:model="date" type="date" id="date"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="##/##/####" required />
        </div>
    </div>
    <div class="relative z-0 w-full mb-5 group">
        <label for="sender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome do Emissor:
        </label>
        <input wire:model="sender" type="text" id="sender"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="" required />
    </div>
    <div class="grid md:grid-cols-2 md:gap-6">
        <div class="relative z-0 w-full mb-5 group">
            <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Telefone
                (opcional):
            </label>
            <input wire:model="phone_sender" type="phone" id="phone" name="phone"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="(99) 99999-9999" />
        </div>
        <div class="relative z-0 w-full mb-5 group">
            <label for="cpf" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">CPF ou CNPJ
                (opcional):
            </label>
            <input wire:model="cpf_sender" type="text" id="cpf" name='cpf'
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="(###.###.###-##)" />
        </div>
    </div>


    <fieldset>
        <legend class="sr-only">payment</legend>

        <div class="flex items-center mb-4">
            <input wire:click="setMoney" wire:model="money" id="country-option-1" type="radio" name="payment"
                value="USA"
                class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                checked>
            <label for="country-option-1" class="block ms-2  text-sm font-medium text-gray-900 dark:text-gray-300">
                Dinheiro
            </label>
        </div>

        <div class="flex items-center mb-4">
            <input wire:click="setPix" wire:model="pix" id="country-option-2" type="radio" name="payment"
                value="Germany"
                class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600">
            <label for="country-option-2" class="block ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                Pix
            </label>
        </div>

        <div class="flex items-center mb-4">
            <input wire:click="setCheck" wire:model="check" id="country-option-2" type="radio" name="payment"
                value="Germany"
                class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600">
            <label for="country-option-2" class="block ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                Cheque
            </label>
        </div>

        <div class="flex items-center mb-4">
            <input wire:click="setTransfer" wire:model="transfer" id="country-option-3" type="radio"
                name="payment" value="Spain"
                class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:bg-gray-700 dark:border-gray-600">
            <label for="country-option-3" class="block ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                Transferência/Depósito
            </label>
        </div>

        <div class="flex items-center mb-4">
            <input wire:click="setCard" wire:model="card" id="country-option-4" type="radio" name="payment"
                value="United Kingdom"
                class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus-ring-blue-600 dark:bg-gray-700 dark:border-gray-600">
            <label for="country-option-4" class="block ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                Cartão de Crédito/Débito
            </label>
        </div>


    </fieldset>


    @if ($pix)
        <div class="grid md:grid-cols-3 md:gap-6">
            <div class="relative z-0 w-full mb-5 group">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quem
                    recebeu
                </label>
                <input wire:model="pixReceiver" type="text" id="name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="ex: joão da silva" required />
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <label for="bank"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Instituição/Banco: :
                </label>
                <input wire:model="pixBank" type="text" id="bank"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Santander, banco do Brasil" required />
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <label for="cpf" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cheve Pix:
                </label>
                <input wire:model="pixKey" type="text" id="key"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="" />
            </div>
        </div>
    @endif

    @if ($check)
        <div class="grid md:grid-cols-4 md:gap-6">
            <div class="relative z-0 w-full mb-5 group">
                <label for="number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nº do
                    Cheque:
                </label>
                <input wire:model="checkN_check" type="number" id="number"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="ex 123545" required />
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <label for="bank"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Instituição/Banco: :
                </label>
                <input wire:model="checkBank" type="text" id="bank"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Santander, banco do Brasil" required />
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <label for="agency" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Agência:
                </label>
                <input wire:model="checkAgency" type="text" id="agency"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="0001" required />
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Data:
                </label>
                <input wire:model="checkDate_check" type="date" id="date" 
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="(###.###.###-##)" />
            </div>
        </div>
    @endif


    @if ($transfer)
        <div class="grid md:grid-cols-3 md:gap-6">
            <div class="relative z-0 w-full mb-5 group">
                <label for="account" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Conta:
                </label>
                <input wire:model="transferAccount" type="text" id="account"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="0010001-5" required />
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <label for="agency" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Agência:
                </label>
                <input wire:model="transferAgency" type="text" id="agency"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="0001" required />
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Data:
                </label>
                <input wire:model="transferDate_transfer" type="date" id="date"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="(###.###.###-##)" required />
            </div>
        </div>
        <div class="grid md:grid-cols-3 md:gap-6">
            <div class="relative z-0 w-full mb-5 group">
                <label for="bank"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Instituição/Banco:
                </label>
                <input wire:model="transferBank" type="text" id="bank"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Santander, banco do Brasil" required />
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <label for="receiver" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Favorecido:
                </label>
                <input wire:model="transferReceiver" type="text" id="receiver"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="ex: João da silva" required />
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <label for="cpf" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nº do
                    documento (opcional):
                </label>
                <input wire:model="transferCpf_receiver" type="text" id="cpf" name='cpf'
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="(###.###.###-##)" />
            </div>
        </div>
    @endif
    <div wire:loading class="text-white mt-3 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"> 
        Salvando...
    </div>

    <button type="submit" wire:loading.remove
        class="text-white mt-3 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Gerar
        recibo</button>
</form>
