<div>
    {{-- @if ($this->budgets)
    <a href="#">
        <h5 class="mb-1 text-2xl font-bold text-center tracking-tight text-gray-900 dark:text-white">
            USE DE UM ORÇAMENTO
        </h5>
        <h5 class="mb-6  text-center tracking-tight text-gray-900 dark:text-white">
            Crie um novo orçamento mais rapido e facil. Começamento com orçamento já existente.
        </h5>
    </a>

    <div class="flex justify-between mt-4 mb-8">

        @foreach ($this->budgets as $item)
            <form wire:submit="receive({{ $item }})"
                class=" justify-between ml-4 max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $item->client }}
                    </h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{!! limit_words($item->description, 10) !!}</p>
                <button type="submit"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Selecionar
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </button>
            </form>
        @endforeach
    </div>
    <a href="#">
        <h5 class="mb-6 text-2xl font-bold tracking-tight text-center text-gray-900 dark:text-white">FAÇA ORÇAMENTO
        </h5>
    </a>
    @endif --}}

    <form wire:submit="submit" class="mx-auto">

        <div class="grid md:grid-cols-2 md:gap-6">
            <div class="relative z-0 w-full mb-5 group">

                <label for="client" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome do
                    cliente</label>
                <input wire:model="client" type="text" id="client" value="{{ $this->valueCliente }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Nome da empresa ..." />
                <div>
                    @error('client')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <label for="value_budget" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Valor do
                    orçamento:
                </label>
                <input wire:model="value_budget" type="text" id="value_budget" name="valor"
                    value="{{ $this->valueValue }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="R$ 0" />
                <div>
                    @error('value_budget')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="grid md:grid-cols-2 md:gap-6">

            <div class="relative z-0 w-full mb-5 group">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email do
                    cliente</label>
                <input wire:model="email_client" type="email" id="email" value="{{ $this->valueEmail }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="email@gmail.com" required />
                <div>
                    @error('email_client')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <label for="cnpj" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">CNPJ/CPF:
                </label>
                <input wire:model="cnpj_budget" type="text" id="cnpj" name="cpf"
                    value="{{ $this->valueCnpj }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="(###.###.###-##)" />
                <div>
                    @error('cnpj_budget')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="grid md:grid-cols-2 md:gap-6">
            <div class="relative z-0 w-full mb-5 group">
                <label for="phone_client" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Telefone
                    do
                    cliente
                    (opcional):
                </label>
                <input wire:model="phone_client" type="phone" id="phone" name="phone"
                    value="{{ $this->valuePhone }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="(99) 99999-9999" />

            </div>
            <div class="relative z-0 w-full mb-5 group">
                <label for="date_budget" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Data do
                    orçamento:
                </label>
                <input wire:model="date_budget" type="date" id="date_budget" value="{{ $this->valueDate }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="(99) 99999-9999" />

            </div>

        </div>
        <div class="relative z-0 w-full mb-5 group">
            <label for="reference" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Referente a:
            </label>
            <input wire:model="reference" type="text" id="reference" value="{{ $this->valueReference }}"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="ex: mão de obra" />
            @error('reference')
                <span class="error">{{ $message }}</span>
            @enderror

        </div>
        <div wire:ignore class="relative z-0 w-full mb-5 group">
            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descrição do
                orçamento</label>
            <textarea placeholder="Faça aqui a descrição dos items..." name="content" wire:model.defer='description'
                id="editor"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        {{ $this->valueDescription }}
        </textarea>

        </div>


        <div wire:loading wire:loading.target='submit' class="text-white mt-3 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"> 
            Salvando...
        </div>
        <button type="submit" wire:loading.remove
            class="text-white mt-3 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Salvar</button>
    </form>

</div>
@push('script')
    <script>
        window.onload = function() {
            const editorElement = document.querySelector('#editor');

            if (editorElement) {
                ClassicEditor
                    .create(editorElement)
                    .then(editor => {
                        editor.model.document.on('change:data', () => {
                            @this.set('description', editor.getData());
                        });
                    })
                    .catch(error => {
                        console.error(error);
                    });
            } else {
                console.error("Editor element not found.");
            }
        };
    </script>
@endpush
