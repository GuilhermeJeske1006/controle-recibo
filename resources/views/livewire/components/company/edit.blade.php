<form wire:submit="edit" class="mx-auto">
    
    <div class="relative z-0 w-full mb-5 group">
        
        <label for="name_company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome da
            empresa</label>
        <input wire:model="name_company" type="text" id="name_company" value="{{ $name_company }}"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Nome da empresa ..."  />
            <div>
                @error('name_company') <span class="error">{{ $message }}</span> @enderror 
            </div>
    </div>
    <div class="grid md:grid-cols-2 md:gap-6">
        <div class="relative z-0 w-full mb-5 group">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email da empresa
                recebido</label>
            <input wire:model="email" type="email" id="email" value="{{ $email }}"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="email@gmail.com" required />
                <div>
                    @error('email') <span class="error">{{ $message }}</span> @enderror 
                </div>
        </div>
        <div class="relative z-0 w-full mb-5 group">
            <label for="cnpj" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">CNPJ:
            </label>
            <input wire:model="cnpj" type="cnpj" id="cnpj" value="{{ $cnpj }}"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="(###.###.###-##)" />
                <div>
                    @error('cnpj') <span class="error">{{ $message }}</span> @enderror 
                </div>
        </div>
    </div>

    <div class="grid md:grid-cols-2 md:gap-6">
        <div class="relative z-0 w-full mb-5 group">
            <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Telefone
                (opcional):
            </label>
            <input wire:model="phone_sender" type="phone" id="phone" value="{{ $phone_sender }}"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="(99) 99999-9999" />
  
        </div>
        <div class="relative z-0 w-full mb-5 group">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Logo da
                empresa</label>
            <input wire:model="photo" id="photo" 
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                id="file_input" type="file">
                <div>
                    @error('photo') <span class="error">{{ $message }}</span> @enderror 
                </div>

        </div>

    </div>
    <div class="relative z-0 w-full mb-5 group">

        <label for="name_company"
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Slogan (Opcional):</label>
        <input wire:model="slogan" type="text" id="slogan" value="{{ $slogan }}"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Informe o slogan da empresa ..." />
        <div>
            @error('slogan')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="grid md:grid-cols-2 md:gap-6">
        <div class="relative z-0 w-full mb-5 group">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Marca
                d´agua</label>
            <input wire:model='marca_dagua'
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                id="marca_dagua" type="file">
            <div>
                @error('marca_dagua')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

        </div>
        <div class="relative z-0 w-full mb-5 group">
            <label for="instagram" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Instagram
                (Opcional):
            </label>
            <div class="flex">
                <span
                    class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border rounded-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z" />
                    </svg>
                </span>
                <input type="text" wire:model='instagram' id="website-admin" value="{{ $instagram }}"
                    class="rounded-none rounded-e-lg bg-gray-50 border text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm border-gray-300 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="elonmusk">
            </div>
            <div>
                @error('instagram')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
        </div>
    </div>
    <div class="relative z-0 w-full mb-5 group">

        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descrição da
            empresa</label>
        <textarea wire:model='description' id="description" rows="4"
            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Escreva sobre a sua empresa...">
        {{ $description }}
        </textarea>


    </div>



    <div class="grid md:grid-cols-2 md:gap-6">
        <div class="relative z-0 w-full mb-5 group">
            <label for="cep" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cep</label>
            <input wire:model.live.debounce.150ms="cep" type="text" id="cep" value="{{ $cep }}"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="## ### ####" required />
                <div>
                    @error('cep') <span class="error">{{ $message }}</span> @enderror 
                </div>
                
        </div>

        <div class="relative z-0 w-full mb-5 group">
            <label for="state" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Estado</label>
            <input wire:model="state" type="text" id="state" value="{{ $state }}"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="SP, RJ" required />
                <div>
                    @error('state') <span class="error">{{ $message }}</span> @enderror 
                </div>
                
        </div>

    </div>
    <div class="grid md:grid-cols-2 md:gap-6">
        <div class="relative z-0 w-full mb-5 group">
            <label for="street" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Rua</label>
            <input wire:model="street" type="text" id="street" value="{{ $street }}"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="ex: Rua são pedro, Rua São paulo" required />
                <div>
                    @error('street') <span class="error">{{ $message }}</span> @enderror 
                </div>
        </div>
        <div class="relative z-0 w-full mb-5 group">
            <label for="city" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cidade</label>
            <input wire:model="city" type="text" id="city" value="{{ $city }}"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="São Paulo, Rio de janeiro ..." required />
                <div>
                    @error('city') <span class="error">{{ $message }}</span> @enderror 
                </div>
        </div>

    </div>
    <div class="grid md:grid-cols-3 md:gap-6">
        <div class="relative z-0 w-full mb-5 group">
            <label for="neighborhood"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bairro</label>
            <input wire:model="neighborhood" type="text" id="neighborhood" value="{{ $neighborhood }}"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="ex: centro, são pedro" required />
                <div>
                    @error('neighborhood') <span class="error">{{ $message }}</span> @enderror 
                </div>
        </div>
        <div class="relative z-0 w-full mb-5 group">
            <label for="complement"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Complemento</label>
            <input wire:model="complement" type="text" id="complement" value="{{ $complement }}"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="ex: 2 andar, fundos ..." />
        </div>
        <div class="relative z-0 w-full mb-5 group">
            <label for="number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Número</label>
            <input wire:model="number" type="text" id="number" value="{{ $number }}"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="123, 741 ..." />
                <div>
                    @error('number') <span class="error">{{ $message }}</span> @enderror 
                </div>
        </div>

    </div>

    <button type="submit"
        class="text-white mt-3 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Salvar</button>
</form>

